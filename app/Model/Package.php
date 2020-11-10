<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['package_name'];

    public function typePackages()
    {
        return $this->hasMany(TypePackage::class,'package_id','id');
    }

}
