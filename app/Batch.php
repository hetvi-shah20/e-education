<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Batch extends Model
{
    protected $table = 'batches';
    protected $fillable = ['main_id','batch_name','course_id','maximum_strength','option_name','starting_month','starting_year','status','batch_time'];
}
