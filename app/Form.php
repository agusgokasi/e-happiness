<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
	protected $fillable = [
		'soal',
    ];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function skors()
    {
        return $this->hasMany('App\Skor');
    }
}
