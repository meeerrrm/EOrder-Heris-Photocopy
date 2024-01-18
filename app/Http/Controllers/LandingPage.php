<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderCreateRequest;
use App\Models\Order;
use App\Models\OrderLog;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function checkOrder(){
        return view('check_orders');
    }
    public function orderPayment($uniq){
        $order = Order::where('uniq',$uniq)->first();
        if(!empty($order)){
            return view('order_payment',['order'=>$order]);
        }
        return abort(404);
    }
    public function order(){
        $print = Product::where('type','print')->get();
        $other = Product::where('type','other')->get();

        return view('orders',['prints'=>$print,'others'=>$other]);
    }
    public function quickCount(Request $request){
        $estimate = 0;
        $product = Product::find($request->cetak);
        $estimate += $product->estimate;
        $opsi_count = 0;
        foreach($request->opsi as $opsi){
            $fetch = Product::find($opsi['other']);
            $opsi_count += $fetch->price ?? 0;
            $estimate += $fetch->estimate ?? 0;
        }
        
        $biayaCetak = $product->price * $request->jum_hal;
        $biayaOpsi = $opsi_count;
        return [
            'biayaCetak'=> $biayaCetak,
            'biayaOpsi'=> $biayaOpsi,
            'biayaTotal'=> $biayaCetak+$biayaOpsi,
            'estimasiWaktu'=>$estimate,
        ];
    }
    public function orderAction(OrderCreateRequest $request){
        $total_price = 0;
        $estimate = 0;
        $file = $this->storeFile($request->file('file'),'order');
        $uniq = $this->generateUniqOrder(4);
        
        $order_detail = [];
        $product = Product::find($request->jenis);
        $product->price *= $request->num_of_page;
        $total_price += $product->price * $request->num_of_page;
        $estimate += $product->estimate;

        array_push($order_detail,$product);
        foreach($request->options as $option){
            $fetch = Product::find($option['other']);
            $total_price += $fetch->price ?? 0;
            $estimate += $fetch->estimate ?? 0;
            array_push($order_detail,$fetch);
        }

        $desc = "Estimasi Waktu: ".$estimate." Menit \n";
        $desc .= $request->description;
        
        $snap_token = $this->generateSnapToken($total_price);

        $order = Order::create([
            'uniq'=>$uniq,
            'name'=>$request->name,
            'email'=>$request->email,
            'phone_number'=>$request->phone_number,
            'order_detail'=>json_encode($order_detail),
            'total_price'=>$total_price,
            'description'=>$desc,
            'file'=>$file,
            'snap_token'=>$snap_token,
        ]);

        OrderLog::create([
            'orders_id'=>$order->id,
            'status'=>'wait-payment',
            'desc'=>'Menunggu Pembayaran',
        ]);
        return redirect(route('order_payment',$order->uniq));
    }
    public function detailOrder($uniq){
        $order = Order::where('uniq',$uniq)->first();
        if(!empty($order)){
            return view('order_detail',['order'=>$order]);
        }
        return abort(404);
    }
}
