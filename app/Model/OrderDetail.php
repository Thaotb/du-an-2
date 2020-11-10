<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';
    protected $fillable = ['TypePackage_id','start_date','finish_date','discount_id','total_money'];
    public function typePackage()
    {
        return $this->belongsTo(TypePackage::class,'TypePackage_id','id');
    }
    public function discount()
    {
        return $this->hasOne(Discount::class,'discount_id','id');
    }
    public function order()
    {
        return $this->belongsTo(Order::class,'orders_id','id');
    }
}
