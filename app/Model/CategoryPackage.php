<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryPackage extends Model
{
    protected $table = 'category_packages';
    protected $fillable = ['categoryPackage_name'];
}
