<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dashboard extends Model
{
    public function setting(){
        $this->hasMany('App\Setting');
    }

    public function kontak(){
        $this->hasMany('App\Kontak');
    }

    public function skill(){
        $this->hasMany('App\Skill');
    }
}
