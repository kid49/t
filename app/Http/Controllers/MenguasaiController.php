<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menguasai;

class MenguasaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kat = Menguasai::latest()->paginate(10);
        return view('admin.skill.kategori.index',compact('kat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.skill.kategori.create');
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
            'nama'  => 'required'
        ]);

        Menguasai::create([
            'nama'  => $request->nama
        ]);

        return redirect()->route('menguasai.index');
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
        $kat = Menguasai::find($id);

        return view('admin.skill.kategori.edit',compact('kat'));
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
        $this->validate($request,[
            'nama'  => 'required'
        ]);

        $kat_data = [
            'nama'  => $request->nama
        ];

        Menguasai::whereId($id)->update($kat_data);

        return redirect()->route('menguasai.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kat = Menguasai::findorfail($id);

        $kat->delete();

        return redirect()->route('menguasai.index');
    }
}
