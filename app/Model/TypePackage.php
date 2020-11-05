<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TypePackage extends Model
{
    protected $table = 'typepackages';
    protected $fillable = ['TypePackage_name','price','price_sale','subject_id','description','status'];
}
