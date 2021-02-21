<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
class homeController extends Controller
{
    //
    /* use App/Post;
    $posts = Post::all(); */

    public function indexHome()
    {
        $title = "Blog";
        return view('home', compact('title'));
    }
    public function indexAbout()
    {
        return view('about');
    }
    public function indexBlog() /* posts(Post $post) */
    {
        $posts = Post::all() ;
        /* $posts = $post->all(); */
        /* dd($posts); */
        return view('posts.index' , compact('posts'));
    }
}
