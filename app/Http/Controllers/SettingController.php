<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $this->validate(
            $request,
            [
                "image_1" => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                "image_2" => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
                "image_3" => 'image|mimes:jpeg,png,jpg,gif,svg|max:4096',
            ],
        );

        $image_1 = $setting->image_1;
        $image_2 = $setting->image_2;
        $image_3 = $setting->image_3;

        if ($request->hasFile('image_1')) {

            $filenamewithextension = $request->file('image_1')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('image_1')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('image_1')->storeAs('public/uploads', $filenametostore);
            $image_1 = asset('storage/uploads/' . $filenametostore);
        }

        if ($request->hasFile('image_2')) {

            $filenamewithextension = $request->file('image_2')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('image_2')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('image_2')->storeAs('public/uploads', $filenametostore);
            $image_2 = asset('storage/uploads/' . $filenametostore);
        }

        if ($request->hasFile('image_3')) {

            $filenamewithextension = $request->file('image_3')->getClientOriginalName();
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
            $extension = $request->file('image_3')->getClientOriginalExtension();
            $filenametostore = $filename . '_' . time() . '.' . $extension;
            $request->file('image_3')->storeAs('public/uploads', $filenametostore);
            $image_3 = asset('storage/uploads/' . $filenametostore);
        }

        $setting->image_1 = $image_1;
        $setting->image_2 = $image_2;
        $setting->image_3 = $image_3;

        $setting->save();

        return redirect()->route('setting.index')->with('message', 'แก้ไข ข้อมูล เสร็จสิ้น');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
