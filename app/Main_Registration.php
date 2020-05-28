<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Main_Registration extends Model
{
    protected $table = 'main_registraions';
    protected $fillable = ['user_id','avtar','address','state','city','email','mobileno','landlineno','status'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
