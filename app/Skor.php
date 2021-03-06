<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skor extends Model
{
    protected $fillable = [
        'nik', 'skor', 'provinsi_id','kota_id', 'nama', 'jeniskelamin', 'pekerjaan', 'jumlahkeluarga',
    ];

    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    public function provinsi()
    {
        return $this->belongsTo('App\Provinsi');
    }

     public function kota()
    {
        return $this->belongsTo('App\Kota');
    }
}
