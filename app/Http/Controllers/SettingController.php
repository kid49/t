<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $set = Setting::get();
        return view('admin.setting.index',\compact('set'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'deskripsi' => 'required',
            'url_ig' => 'required',
            'url_fb' => 'required',
            'url_gitlab' => 'required',
            'url_github' => 'required',
            'url_tiktok' => 'required',
        ]);

        Setting::create([
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'nomor_hp'        => $request->nomor_hp,
            'deskripsi'     => $request->deskripsi,
            'url_ig'        => $request->url_ig,
            'url_fb'        => $request->url_fb,
            'url_gitlab'    => $request->url_gitlab,
            'url_github'    => $request->url_github,
            'url_tiktok'    => $request->url_tiktok,
        ]);

        return redirect()->route('setting.index');
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
        $set = Setting::find($id);
        return view('admin.setting.edit', \compact('set'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
            'nama'          => 'required',
            'alamat'        => 'required',
            'nomor_hp'        => 'required',
            'deskripsi'     => 'required',
            'url_ig'        => 'required',
            'url_fb'        => 'required',
            'url_gitlab'    => 'required',
            'url_github'    => 'required',
            'url_tiktok'    => 'required',
        ]);

        $setting_data = [
            'nama'          => $request->nama,
            'alamat'        => $request->alamat,
            'nomor_hp'        => $request->nomor_hp,
            'deskripsi'     => $request->deskripsi,
            'url_ig'        => $request->url_ig,
            'url_fb'        => $request->url_fb,
            'url_gitlab'    => $request->url_gitlab,
            'url_github'    => $request->url_github,
            'url_tiktok'    => $request->url_tiktok,
        ];

        Setting::whereId($id)->update($setting_data);

        return redirect()->route('setting.index')->with('toast_success', 'Kategori Berhasil di edit!');
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
