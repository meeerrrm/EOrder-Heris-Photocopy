<?php

namespace App\Http\Controllers\Order;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderLog;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $orders = Order::get();
        return view('admin.order.index',compact('orders'));
    }
    public function show($id){
        $order = Order::findOrFail($id);
        return view('admin.order.show',compact('order'));
    }
    public function update($id, Request $request){
        $order = Order::findOrFail($id);
        
        $list =[
            'on-going'=>'Sedang dikerjakan',
            'done'=>'Selesai dikerjakan',
            'taken'=>'Telah diambil!',
        ];

        OrderLog::create([
            'order_id'=>$order->id,
            'status'=>$request->status,
            'desc'=>$list[$request->status],
        ]);

        return redirect()->route('admin.order.show',$id)->with('success','Berhasil Update Status');
        
    }
}
