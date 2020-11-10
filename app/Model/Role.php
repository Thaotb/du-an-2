<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['role_name'];
    public function infors()
    {
        return $this->hasMany(Infor::class,'infor_id','id');
    }
}
