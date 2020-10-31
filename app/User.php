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
        'name', 'email', 'password','role','phone'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function Section(){
        //its relationship between user(parent) and section(child)
        //hasOne ->its key to know Who table is user connected with ?

        return $this->hasOne('App\Model\Section','admin');
    }
    public function Posts(){
        return $this->hasMany('App\Model\Post');
    }

    public function Comments(){
        return $this->hasMany('App\Model\Comment');
    }




}
