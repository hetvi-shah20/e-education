<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['main_id','course_name','standard','subject','description','refrence_website','material','photo'];
}
