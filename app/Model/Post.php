<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table="posts";
    protected $primaryKey="id";
    protected $fillable=[
        'id',
        'title',
        'content',
        'section_id',
        'user_id',
    ];
    public function Section(){
        return $this->belongsTo('App\Model\Section');

    }
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function Comments(){
        return $this->hasMany('App\Model\Comment');
    }
    public function Photos(){
        return $this->BelongsToMany('App\Model\Photo','post_photos');
    }
}
