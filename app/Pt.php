<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pt extends Model
{
    protected $table = 'pt';
    protected $fillable = ['infor_id','salary','subject_id'];
}
