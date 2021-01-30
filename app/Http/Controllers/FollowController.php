<?php

namespace App\Http\Controllers;

use App\Follow;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $follows = Follow::orderBy('id', 'DESC')->get();
        return view('admin.follow.index', compact('follows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.follow.create');
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
                "logo_url" => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
                "contact" => 'required',
            ],
        );

        $filenamewithextension = $request->file('logo_url')->getClientOriginalName();

        //get filename without extension
        $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

        //get file extension
        $extension = $request->file('logo_url')->getClientOriginalExtension();

        //filename to store
        $filenametostore = $filename . '_' . time() . '.' . $extension;

        //Upload File
        $request->file('logo_url')->storeAs('public/uploads', $filenametostore);

        $url = asset('storage/uploads/' . $filenametostore);

        $follow = new Follow();
        $follow->logo_url = $url;
        $follow->contact = $request->contact;
        $follow->url = $request->url;
        $follow->is_published = $request->is_published;
        $follow->save();

        return redirect()->route('follow.index')->with('message', 'บันทึก ช่องทางการติดตาม เสร็จสิ้น');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function show(follow $follow)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function edit(follow $follow)
    {
        return view('admin.follow.edit', compact('follow'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, follow $follow)
    {
        $this->validate(
            $request,
            [
                "logo_url" => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:10000',
                "contact" => 'required',
            ],
        );

        $url = $follow->logo_url;

        if ($request->hasFile('logo_url')) {

            $filenamewithextension = $request->file('logo_url')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('logo_url')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('logo_url')->storeAs('public/uploads', $filenametostore);
            $url = asset('storage/uploads/' . $filenametostore);
        }

        $follow->logo_url = $url;
        $follow->contact = $request->contact;
        $follow->url = $request->url;
        $follow->is_published = $request->is_published;
        $follow->save();

        return redirect()->route('follow.index')->with('message', 'บันทึก ช่องทางการติดตาม เสร็จสิ้น');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\follow  $follow
     * @return \Illuminate\Http\Response
     */
    public function destroy(follow $follow)
    {
        //
    }
}
