<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Petugas extends Model
{
    protected $fillable = [
        'nama', 'jk', 'no_telp', 'alamat', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function tanggapan()
    {
        return $this->hasMany('App\Tanggapan');
    }
}
