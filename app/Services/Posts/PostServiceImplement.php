<?php

namespace App\Services\Posts;

use App\Models\Post;
use Illuminate\Support\Facades\Request;

class PostServiceImplement implements PostService
{
    public function getPost()
    {
        $data = Post::latest();
        return $data;
    }

    public function getPostById($id)
    {
        $data = Post::where('id', $id)->get();
        return $data;
    }


}
