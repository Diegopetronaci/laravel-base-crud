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
        return view('home');
    }
    public function indexAbout()
    {
        return view('about');
    }
    public function indexBlog()
    {
        $posts = Post::all() ;
        return view('blog' , compact('posts'));
    }
}
