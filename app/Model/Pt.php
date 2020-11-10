<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pt extends Model
{
    protected $table = 'pts';
    protected $fillable = ['infor_id','salary','description','subject_id'];
    public function infor()
    {
        return $this->hasOne(Infor::class,'infor_id','id');
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class,'subject_id','id');
    }
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class,'pt_id','id');
    }
    public function commentPts()
    {
        return $this->hasMany(CommentPt::class,'pt_id','id');
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class,'pt_id','id');
    }
    public function typePackages()
    {
        return $this->hasMany(TypePackage::class,'pt_id','id');
    }
}
