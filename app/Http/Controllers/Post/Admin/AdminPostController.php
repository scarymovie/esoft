<?php

namespace App\Http\Controllers\Post\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\CreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

class AdminPostController extends Controller
{
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateRequest $request
     * @param Post $post
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request, Post $post)
    {
        try {
            $validated = $request->validated();
            $post = Post::create($validated);
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['title',['required']]);
        }
        return redirect()->back()->with('message', 'successfully');
    }
}
