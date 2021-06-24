<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menguasai extends Model
{
    protected $table = 'menguasai';
    protected $fillable = ['nama'];

    public function skill(){
        return $this->belongsToMany('App\Skill');
    }
    public function company(){
        return $this->belongsToMany('App\Company');
    }
}
