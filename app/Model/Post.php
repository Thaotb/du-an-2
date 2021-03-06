<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = ['title','content','featured_image','categoryPost_id','url','admin_id','status'];
}
