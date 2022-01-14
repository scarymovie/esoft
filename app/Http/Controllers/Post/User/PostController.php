<?php

namespace App\Http\Controllers\Post\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::select('title', 'description')->paginate('4');
        return view('post.index', compact('posts'));
    }
}
