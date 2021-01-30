<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::orderBy('id', 'DESC')->paginate(25);
        return view('admin.galleries.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galleries.create');
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
                "image_url" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
                "name" => 'required',
            ],
            [
                'name.required' => 'กรุณาระบุชื่อภาพ',
            ]
        );

        $filenamewithextension = $request->file('image_url')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('image_url')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename . '_' . time() . '.' . $extension;

        //Upload File
        $request->file('image_url')->storeAs('public/uploads', $filenametostore);

        $url = asset('storage/uploads/' . $filenametostore);

        $gallery = new  Gallery();
        $gallery->user_id = Auth::id();
        $gallery->image_url = $url;
        $gallery->name = $request->name;
        $gallery->is_published = $request->is_published;
        $gallery->save();

        return redirect()->route('galleries.index')->with('message', 'บันทึก รูปภาพ เสร็จสิ้น');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.galleries.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $this->validate(
            $request,
            [
                "image_url" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                "name" => 'required',
            ],
            [
                'name.required' => 'กรุณาระบุชื่อภาพ',
            ]
        );

        $filenamewithextension = $request->file('image_url')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('image_url')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename . '_' . time() . '.' . $extension;

        //Upload File
        $request->file('image_url')->storeAs('public/uploads', $filenametostore);

        $url = asset('storage/uploads/' . $filenametostore);

        $gallery->user_id = Auth::id();
        $gallery->image_url = $url;
        $gallery->name = $request->name;
        $gallery->is_published = $request->is_published;
        $gallery->save();

        return redirect()->route('galleries.index')->with('message', 'บันทึก รูปภาพ เสร็จสิ้น');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        //
    }
}
