<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fee extends Model
{
    protected $fillable = ['main_id','course_id','option_name','fees','duration','status'];
}
