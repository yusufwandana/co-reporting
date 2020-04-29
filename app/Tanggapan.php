<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $fillable = [
        'tanggal', 'teks_respon', 'pengaduan_id', 'user_id'
    ];

    public function pengaduan()
    {
        return $this->belongsTo('App\Pengaduan');
    }

    public function petugas()
    {
        return $this->belongsTo('App\Petugas');
    }

}
