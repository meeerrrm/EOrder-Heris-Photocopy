<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderLog extends Model
{
    use HasFactory;
    protected $fillable = [	
        "user_id",
        "order_id",
        "status",
        "desc",
    ];
    public function order(){
        return $this->hasOne(Order::class);
    }
}
