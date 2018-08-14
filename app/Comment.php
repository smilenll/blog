<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function associate($post)
    {
    }

    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
