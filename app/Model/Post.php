<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','content','featured_image','categoryPost_id','url','admin_id','status'];
    public function categoryPost()
    {
        return $this->belongsTo(CategoryPost::class,'categoryPost_id','id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
}
