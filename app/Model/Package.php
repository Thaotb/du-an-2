<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['package_name','price','price_sale','date_start','date_finish','subject_id','category_package_id','pt_id','status'];
}
