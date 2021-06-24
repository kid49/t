<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kontak;

class KontakController extends Controller
{
   public function kontak(){
       $kontak = Kontak::latest()->paginate(10);
       return view('admin.kontak.index',\compact('kontak'));
   }

}
