<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CommentPt extends Model
{
    protected $table = 'comment_pts';
    protected $fillable = ['member_id','pt_id','content','status','date','ratting'];
}
