<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'user_name' ,
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts(){

   return $this->hasMany('App/Post');

  }

  public function likes(){

    return $this->hasMany('App/Like');
 
   }


    public function comments(){

    return $this->hasMany('App/Comment');
 
   }



   public function sender(){
       return $this->hasMany('App\Message', 'sender_id');
   }

   public function receiver(){

    return $this->hasMany('App/Message', 'receiver_id','id');
 
   }

}
 