<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryPost extends Model
{
    protected $table = 'category_posts';
    protected $fillable = ['category_name'];
    public function posts()
    {
        return $this->hasMany(Post::class,'categoryPost_id','id');
    }
}
