<?php

namespace App\Http\Controllers;

use App\Follow;
use App\Post;
use App\Tag;
use App\Gallery;
use App\Setting;

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
        $setting = Setting::first();
        $tags = Tag::orderBy('name', 'ASC')->where('is_published', '1')->get();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('is_published', '1')->where('post_type', 'post')->paginate(5);
        return view('website.index', compact('tags', 'posts', 'setting', 'follows'));
    }

    public function about()
    {
        $setting = Setting::first();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        return view('website.about', compact('follows', 'setting'));
    }

    public function team()
    {
        $setting = Setting::first();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        return view('website.team', compact('follows', 'setting'));
    }

    public function post($slug)
    {
        $setting = Setting::first();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        $post = Post::where('slug', $slug)->where('post_type', 'post')->where('is_published', '1')->first();
        if ($post) {
            return view('website.post', compact('post', 'follows', 'setting'));
        } else {
            return abort(404);
        }
    }

    public function posts()
    {
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->where('is_published', '1')->paginate(12);
        return view('website.posts', compact('posts', 'follows', 'setting'));
    }

    public function galleries()
    {
        $setting = Setting::first();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        $galleries = Gallery::orderBy('id', 'DESC')->where('is_published', '1')->paginate(12);
        return view('website.galleries', compact('galleries', 'follows', 'setting'));
    }

    public function tag($slug)
    {
        $setting = Setting::first();
        $follows = Follow::orderBy('id', 'ASC')->where('is_published', '1')->get();
        $tag = tag::where('slug', $slug)->where('is_published', '1')->first();
        if ($tag) {
            $posts = $tag->posts()->orderBy('id', 'DESC')->where('is_published', '1')->paginate(5);
            return view('website.tag', compact('tag', 'posts', 'follows', 'setting'));
        } else {
            return abort(404);
        }
    }
}
