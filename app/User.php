<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function inbox(){
        return $this->hasMany('App\Message', 'to_user');
    }
    public function sent(){
        return $this->hasMany('App\Message', 'from_user');
    }
    
    public function items(){
        return $this->hasMany('App\Item');
    }
}
