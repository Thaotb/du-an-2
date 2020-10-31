<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'package';
    protected $fillable = ['package_name','price','price_sale','date_start','date_finish','subject_id','catepack_id','pt_id','status'];
}
