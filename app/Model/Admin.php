<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'admins';
    protected $fillable = ['infor_id'];
    public function infor()
    {
        return $this->hasOne(Infor::class,'infor_id','id');
    }
    public function posts()
    {
        return $this->hasMany(Infor::class,'admin_id','id');
    }
}
