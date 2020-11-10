<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Infor extends Model
{
    protected $table = 'infors';
    protected $fillable = ['name','birth_date','gender','address','google_id','phone','avatar','email','email_verified_at',
    'avatar_original','remember_token','status','password','role'];
    public function admin()
    {
        return $this->belongsTo(Admin::class,'infor_id','id');
    }
    public function member()
    {
        return $this->belongsTo(Member::class,'infor_id','id');
    }
    public function pt()
    {
        return $this->belongsTo(Pt::class,'infor_id','id');
    }
    public function role()
    {
        return $this->belongsTo(Role::class,'role_id','id');
    }
}
