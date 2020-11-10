<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['member_id','orders_date'];
    public function member()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class,'orders_id','id');
    }
}
