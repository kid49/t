<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Skill;
use App\Menguasai;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::latest()->paginate(10);
        return view('admin.skill.index',compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menguasai = Menguasai::all();
        return view('admin.skill.create',compact('menguasai'));
    }

    public function store(Request $request)
    {
        
        $this->validate(
            $request,
            [
                'nama'          => 'required',
                'gambar'        => 'required|mimes:jpg,png,jpeg|max:2048',
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong!',
                'gambar.required' => 'Gambar tidak boleh kosong!',

            ]
        );

        $gambar = $request->gambar;

        $skill_gambar = time() . $gambar->getClientOriginalName();

        $skill = Skill::create([
            'nama'      => $request->nama,
            'gambar'    => 'public/uploads/skill/' . $skill_gambar,
        ]);

        $skill->menguasai()->attach($request->menguasai);

        $gambar->move('public/uploads/skill/', $skill_gambar);

        return redirect()->route('skill.index')->with('SuccessAlert', 'Skill Berhasil di tambahkan!');
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
        $menguasai = Menguasai::all();
        $set = Skill::find($id);
        return view('admin.skill.edit',\compact('set','menguasai'));
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
            ],
            [
                'nama.required' => 'Nama tidak boleh kosong!',

            ]);

        $skill = Skill::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $skill_gambar = time() . $gambar->getClientOriginalName();
            $gambar->move('public/uploads/skill/', $skill_gambar);

            $skill_data = [
                'nama' => $request->nama,
                'gambar' => 'public/uploads/skill/' . $skill_gambar
            ];
        } else {
            $skill_data = [
                'nama' => $request->nama,
            ];
        }

        $skill->menguasai()->sync($request->menguasai);

        $skill->update($skill_data);

        return redirect()->route('skill.index')->with('success', 'Task Created Successfully!');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $skill  = Skill::findorfail($id);

        $skill->delete($id);

        return redirect()->route('skill.index');
    }
}
