<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function index(Post $post)
    {
        return view('index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}