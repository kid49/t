<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $table = 'setting';

    protected $fillable = ['nama', 'alamat', 'deskripsi', 'url_ig','url_fb' , 'url_gitlab', 'url_github','url_tiktok', 'nomor_hp'];

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
