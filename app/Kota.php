<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    protected $fillable = [
        'kota', 'skor', 'status', 'skor', 'input', 'final_skor', 'provinsi_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skors()
    {
        return $this->hasMany('App\Skor');
    }
    public function provinsi()
    {
        return $this->belongsTo('App\Provinsi');
    }
}
