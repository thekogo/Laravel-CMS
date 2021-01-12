<?php

namespace App\Http\Controllers;

use App\Post;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

function str_slug($title, $separator = '-', $language = 'en')
{
    $string = preg_replace('/[^a-z0-9ก-๙เแ]/i', $separator, $title);
    $string = preg_replace('/-+/', $separator, $string);
    $string = preg_replace('/-$|^-/', '', $string);
    return $string;
    // return Str::slug($title, $separator, $language);
}

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'DESC')->where('post_type', 'post')->paginate(25);
        return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.posts.create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                "thumbnail" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                "title" => 'required|unique:posts',
                "details" => "required",
                "tag_id" => "required"
            ],
            [
                'thumbnail.required' => 'Enter thumbnail url',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
                'tag_id.required' => 'Select categories',
            ]
        );

        $filenamewithextension = $request->file('thumbnail')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('thumbnail')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename . '_' . time() . '.' . $extension;

        //Upload File
        $request->file('thumbnail')->storeAs('public/uploads', $filenametostore);

        $url = asset('storage/uploads/' . $filenametostore);

        $post = new  Post();
        $post->user_id = Auth::id();
        $post->thumbnail = $url;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->details = $request->details;
        $post->is_published = $request->is_published;
        $post->post_type = 'post';
        $post->save();

        $post->tags()->sync($request->tag_id, false);

        return redirect()->route('posts.index')->with('message', 'บันทึก ข่าวใหม่ เสร็จสิ้น');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.posts.edit', compact('tags', 'post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate(
            $request,
            [
                "thumbnail" => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                "title" => 'required|unique:posts,title,' . $post->id . ',id',
                "details" => "required",
                "tag_id" => "required"
            ],
            [
                'thumbnail.required' => 'Enter thumbnail',
                'title.required' => 'Enter title',
                'title.unique' => 'Title already exist',
                'details.required' => 'Enter details',
                'tag_id.required' => 'Select categories',
            ]
        );

        $url = $post->thumbnail;

        if ($request->hasFile('thumbnail')) {

            $filenamewithextension = $request->file('thumbnail')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('thumbnail')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename . '_' . time() . '.' . $extension;

            //Upload File
            $request->file('thumbnail')->storeAs('public/uploads', $filenametostore);

            $url = asset('storage/uploads/' . $filenametostore);
        }

        $post->thumbnail = $url;
        $post->title = $request->title;
        $post->slug = str_slug($request->title);
        $post->details = $request->details;
        $post->is_published = $request->is_published;
        $post->post_type = 'post';
        $post->save();

        $post->tags()->sync($request->tag_id, false);

        return redirect()->route('posts.index')->with('message', 'แก้ไข ข่าวใหม่ เสร็จสิ้น');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index')->with('delete-message', 'ลบ ข่าวสาร เสร็จสิ้น');
    }
}
