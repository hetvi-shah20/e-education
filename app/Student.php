<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = ['main_id','user_id','name','email','rollno','phone_no','birthdate','gender','batch_id','fees','duration','admissiondate','photo','installment_status','installment_count'];
}
