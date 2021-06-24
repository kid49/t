<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function kontak(){
        return $this->belongsTo('App\Kontak');
    }

    public function portfolio(){
        return $this->belongsTo('App\Portfolio');
    }

    public function skill(){
        return $this->belongsTo('App\Skill');
    }

    public function menguasai(){
        return $this->belongsToMany('App\Menguasai');
    }

    public function setting(){
        return $this->hasMany('App\Setting');
    }
}
