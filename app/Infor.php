<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    protected $table = 'infor';
    protected $fillable = ['name','birth_date','gender','address','phone','avatar','email','email_verified_at','remember_token','status',
    'password'
    ];
}
