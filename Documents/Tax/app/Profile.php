<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded=['id'];
    protected $table='profile';
    // public function user()
    // {
    //     return $this->belongsToOne('App\User');
    // }
}
