<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    protected $table = 'infors';
    protected $fillable = ['name','birth_date','gender','address','google_id','phone','avatar','email','email_verified_at',
    'avatar_original','remember_token','status','password','role'];
}
