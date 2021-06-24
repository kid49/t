<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $table = 'skill';

    protected $fillable = [
        'nama', 'gambar' 
    ];

    public function menguasai(){
        return $this->belongsToMany('App\Menguasai');
    }
}
