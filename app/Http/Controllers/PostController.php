<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    } 

    public function index() 
    {
        // $posts = Post::get(); // return all posts that exist in the database
        $posts = Post::latest()->paginate(20); // 2 - how many you posts want to display per page while others will go to the other page with page-menu (which will be bigger automatically)
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

    public function destroy(Post $post) 
    {
        // kur PostPolicy, kad galima istrinti tik savo, o ne kito postą, tai dar reik čia parašyti
        $this->authorize('delete', $post);

        $post->delete();

        return back();
    }
}
