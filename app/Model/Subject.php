<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = ['subject_name'];
    public function pts()
    {
        return $this->hasMany(Pt::class,'subject_id','id');
    }
    public function typePackages()
    {
        return $this->hasMany(TypePackage::class,'subject_id','id');
    }
}
