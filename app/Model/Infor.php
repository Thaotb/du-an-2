<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    protected $table = 'infors';
    protected $fillable = ['name','birth_date','gender','address','phone','avatar','email','email_verified_at','remember_token','status','password','role_id'];
}
