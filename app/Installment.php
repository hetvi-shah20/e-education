<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Installment extends Model
{
    protected $fillable = ['student_id','payment_amount','date','remaining_amount'];
}
