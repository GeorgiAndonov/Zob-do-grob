<?php

namespace App;

class Comment extends Model
{
    Public function post()
    {
        return $this->belongsTo(Post::class);
    }
    
}