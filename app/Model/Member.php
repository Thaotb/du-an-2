<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'members';
    protected $fillable = ['infor_id','typeMember','typeAccount'];
    public function infor()
    {
        return $this->hasOne(Infor::class,'infor_id','id');
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class,'member_id','id');
    }
    public function orders()
    {
        return $this->hasMany(Orders::class,'member_id','id');
    }
    public function commentPts()
    {
        return $this->hasMany(CommentPts::class,'member_id','id');
    }
    public function discounts()
    {
        return $this->hasMany(Discount::class,'member_id','id');
    }
}
