<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags = Tag::orderBy('id', 'DESC')->get();
        return view('admin.tags.index', compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:tags'
        ], [
            'thumbnail.required' => 'กรุณาระบุ url รูป',
            'name.required' => 'กรุณาระบุชื่อ Tag',
            'name.unique' => 'มีชื่อนี้แล้ว',
        ]);

        $tag = new Tag();
        $tag->thumbnail = $request->thumbnail;
        $tag->user_id = Auth::id();
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->is_published = $request->is_published;
        $tag->save();

        return redirect()->route('tags.index')->with('message', 'สร้าง Tag เสร็จสมบูรณ์');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        return view('admin.tags.edit', compact('tag'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        $this->validate($request, [
            'name' => 'required|unique:tags,name,' . $tag->id
        ], [
            'name.required' => 'กรุณาระบุชื่อ Tag',
            'name.unique' => 'มีชื่อนี้แล้ว',
        ]);

        $tag->user_id = Auth::id();
        $tag->name = $request->name;
        $tag->slug = str_slug($request->name);
        $tag->is_published = $request->is_published;
        $tag->save();

        return redirect()->route('tags.index')->with('message', 'แก้ไข Tag เสร็จสมบูรณ์');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        $tag->delete();

        return redirect()->route('tags.index')->with('delete-message', 'ลบ Tag เสร็จสมบูรณ์');
    }
}
