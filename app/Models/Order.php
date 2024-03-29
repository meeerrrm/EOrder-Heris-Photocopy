<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [	
        "uniq",
        "name",
        "email",
        "phone_number",
        "order_detail",
        "total_price",
        "pay",
        "description",
        "file",
        "snap_token",
    ];
    public function log(){
        return $this->hasMany(OrderLog::class)->orderBy('id','desc');
    }
}
