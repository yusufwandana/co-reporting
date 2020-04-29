<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';
    protected $fillable = [
        'nik', 'nama', 'jk', 'no_telp', 'alamat', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function pengaduan()
    {
        return $this->hasMany('App\Pengaduan');
    }
}
