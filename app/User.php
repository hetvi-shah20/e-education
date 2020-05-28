<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','provider_id','avatar','password','role','otp','status'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function loginUser($email,$password,$role)
  {
        
       return \Auth::attempt(array('email' => $email, 'password' => $password,'role'=> $role));
  
  }

  public function profile()
  {
      return $this->hasOne('App\Main_Registration');
  }
}
