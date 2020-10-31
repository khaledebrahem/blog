<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table="sections";
    protected $primaryKey="id";
    protected $fillable=[
        'id',
        'name',
        'admin',
    ];

    public function Admin(){
        //its relationship between section(child)and user(parent)
        //forignKey ->its key to know Who row connect with another table
        //section belongsTo(user)
        //belongsTo -> its working to return object from atable
        return $this->belongsTo('App\User','admin');
    }
    public function Posts(){
        return $this->hasMany('App\Model\Post');
    }

}
