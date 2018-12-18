<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    public function user(){
    return $this->belongsTo('App\User');

    }

    public function posts(){
    return $this->belongsTo('App\Post');

    }

    protected $guarded = ['id'];
    protected $table = 'likes';
}
