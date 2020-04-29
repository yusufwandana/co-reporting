<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengaduan;
use App\Masyarakat;

class DashboardController extends Controller
{
    public function admin()
    {
        $belum      = Pengaduan::where('status', 'terkirim')->get()->count();
        $proses     = Pengaduan::where('status', 'proses')->get()->count();
        $selesai    = Pengaduan::where('status', 'selesai')->get()->count();
        $jumlah     = Pengaduan::all()->count();

        $data = [
            'belum'     => $belum,
            'proses'    => $proses,
            'selesai'   => $selesai,
            'jumlah'    => $jumlah
        ];

        // dd($data['proses']);

        return view('admin.dashboard', compact('data'));
    }

    public function petugas()
    {
        return view('admin.dashboard');
    }

    public function masyarakat()
    {
        $masyarakat = Masyarakat::where('user_id', auth()->user()->id)->first();
        $belum      = Pengaduan::where(['status' => 'terkirim',
                                        'masyarakat_id' => $masyarakat->id])->get()->count();
        $proses     = Pengaduan::where(['status' => 'proses',
                                        'masyarakat_id' => $masyarakat->id])->get()->count();
        $selesai    = Pengaduan::where(['status' => 'selesai',
                                        'masyarakat_id' => $masyarakat->id])->get()->count();
        $jumlah     = Pengaduan::where('masyarakat_id', $masyarakat->id)->get()->count();

        $data = [
            'belum'     =>  $belum,
            'proses'    =>  $proses,
            'selesai'   =>  $selesai,
            'jumlah'    =>  $jumlah
        ];

        return view('masyarakat.dashboard', compact('data'));
    }
}
