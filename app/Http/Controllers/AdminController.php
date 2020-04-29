<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use App\Masyarakat;
use App\Pengaduan;
use App\Tanggapan;
use App\Petugas;

class AdminController extends Controller
{
    public function pengaduanProses()
    {
        $data   =   Pengaduan::where('status', 'proses')->latest()->get();
        $data1  =   Pengaduan::where('status', 'selesai')->latest()->get();
        return view('admin.pengaduan', compact('data', 'data1'));
    }

    public function tanggapiPengaduan()
    {
        $data = Pengaduan::orderBy('tanggal', 'ASC')->where('status', 'terkirim')->get();
        return view('admin.tanggapan', compact('data'));
    }

    public function detailPengaduan($id)
    {
        $data = Pengaduan::find($id);

        return view('admin.detail-pengaduan', compact('data'));
    }

    public function selesaiPengaduan($id)
    {
        $data = Pengaduan::find($id);
        $data->status = 'selesai';
        $data->save();

        return redirect()->back();
    }

    public function beriTanggapan($id)
    {
        $data = Pengaduan::where('id', $id)->with('Masyarakat')->first();
        return view('admin.beri-tanggapan', compact('data'));
    }

    public function postTanggapan(Request $request)
    {
        $date = date('Y-m-d');
        Tanggapan::create([
            'tanggal'       =>  $date,
            'teks_respon'   =>  $request->teks_tanggapan,
            'pengaduan_id'  =>  $request->pengaduan_id,
            'user_id'       =>  auth()->user()->id
        ]);

        $data   =   Pengaduan::find($request->pengaduan_id);
        $data->status   =   'proses';
        $data->save();

        return redirect()->route('pengaduan.tanggapi')->with('success', 'Berhasil ditanggapi');
    }
}
