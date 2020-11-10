<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    protected $table = 'discounts';
    protected $fillable = ['code','price','start_day','finish_day'];
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetails::class,'discount_id','id');
    }
    public function member()
    {
        return $this->belongsTo(Member::class,'member_id','id');
    }
}
