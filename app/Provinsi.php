<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = [
        'provinsi','skor', 'status', 'skor', 'input', 'final_skor'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skors()
    {
        return $this->hasMany('App\Skor');
    }
    public function kotas()
    {
        return $this->hasMany('App\Kota');
    }
}
