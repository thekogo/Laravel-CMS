<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use App\Gallery;

function str_slug($title, $separator = '-', $language = 'en')
{
    $string = preg_replace('/[^a-z0-9ก-๙เแ]/i', $separator, $title);
    $string = preg_replace('/-+/', $separator, $string);
    $string = preg_replace('/-$|^-/', '', $string);
    return $string;
    // return Str::slug($title, $separator, $language);
}

class WebsiteController extends Controller
{
    public function index()
    {
        $tags = Tag::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('is_published', '1')->where('post_type', 'post')->paginate(5);
        return view('website.index', compact('tags', 'posts'));
    }

    public function about()
    {
        return view('website.about');
    }

    public function post($slug)
    {
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post'));
        } else {
            return abort(404);
        }
    }

    public function posts()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(12);
        return view('website.posts', compact('posts'));
    }

    public function galleries()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->where('is_published', '1')->paginate(12);
        return view('website.galleries', compact('galleries'));
    }

    public function tag($slug)
    {
        $tag = tag::where('slug', $slug)->where('is_published', '1')->first();
        if ($tag) {
            $posts = $tag->posts()->orderBy('id', 'DESC')->where('is_published', '1')->paginate(5);
            return view('website.tag', compact('tag', 'posts'));
        } else {
            return abort(404);
        }
    }
}
