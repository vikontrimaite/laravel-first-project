<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::get(); // return all posts that exist in the database
        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request) 
    {
        // validation
        $this->validate($request, [
            'body' => 'required'
        ]);

        // create post
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        // trumpesnis varitantas aukščiau aprašyto
            // auth()->user()->posts()->create();

            // dar geresnis variantas
            // $request->user()-> arba tiesiog nurodomas User.php 
            
            // create a post through an user
            $request->user()->posts()->create($request->only('body'));

        return back();

            return back();
    }
}
