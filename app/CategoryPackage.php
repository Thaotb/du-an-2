<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryPackage extends Model
{
    protected $table = 'category_package';
    protected $fillable = ['catepack_name'];
}
