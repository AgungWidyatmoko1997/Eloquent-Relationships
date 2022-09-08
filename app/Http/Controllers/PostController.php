<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        // get all post from model
        $posts = Post::latest()->get();

        // passing post to view
        return view('posts', [
            'posts' => $posts
        ]);
    }
}
