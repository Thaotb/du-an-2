<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CommentPT extends Model
{
    protected $table = 'comment_pt';
    protected $fillable = ['member_id','pt_id','content','status','date','ratting'];
}
