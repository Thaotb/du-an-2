<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pt extends Model
{
    protected $table = 'pts';
    protected $fillable = ['infor_id','salary','subject_id'];
}
