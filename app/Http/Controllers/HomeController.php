<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->limit(5)->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->limit(5)->get();
        return view('admin.home', compact('posts', 'tags'));
    }
}
