<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function storeFile($file, $folder = "product"){
        $original_name = rand(100000,999999).'.'.$file->extension();
        $file->storeAs('public/'.$folder,$original_name);
        return $original_name;
    }
    public function generateUniqOrder($long){
        $uniq1 = date('ymd');
        $uniq2 = $this->generateRandomString($long);
        $uniq3 = date('hsi');
        return $uniq1 . $uniq2 . $uniq3; 
    }
    public function generateRandomString($length = 10) {
        return substr(str_shuffle(str_repeat($x='BCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
    }

    public function generateSnapToken($amount){
        
        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $amount,
            )
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return $snapToken;
    }
    
}
