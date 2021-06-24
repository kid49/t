<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dashboard;
use App\Setting;
use App\Skill;
use App\Kontak;
class DashboardController extends Controller
{
    public function tampil(){
        $set = Setting::all();
        $skill = Skill::all();
        $kontak = Kontak::all();
        return view('admin.dashboard.index',compact('set', 'skill', 'kontak'));
    }
}
