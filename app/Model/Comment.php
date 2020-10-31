<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table="comment";
    protected $primaryKey="id";
    protected $fillable=[
        'id',
        'content',
        'post_id',
        'user_id',
    ];

}
