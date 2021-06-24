<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;
use App\Setting;
use App\Portfolio;
use App\Menguasai;
use App\Skill;

class CompanyController extends Controller
{
    public function tampil(){
        $setting = Setting::where('id','2')->first();
        $port = Portfolio::get();
        $menguasai = Menguasai::all();
        $skill = Skill::all();
        return view('frontend.company',compact('port', 'menguasai', 'skill','setting'));
    }

    public function kontak(Request $request){
        $this->validate($request,[
            'nama'  => 'required',
            'email'  => 'required',
            'pesan'  => 'required'
        ]);

        Kontak::create([
            'nama'  => $request->nama,
            'email'  => $request->email,
            'pesan'  => $request->pesan
        ]);

        return redirect('/');
    }

   
}
