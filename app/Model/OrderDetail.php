<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderdetails';
    protected $fillable = ['TypePackage_id','start_date','finish_date','discount_id','total_money'];
}
