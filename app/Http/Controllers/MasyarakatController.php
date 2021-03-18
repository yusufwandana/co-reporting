<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masyarakat;
use App\Pengaduan;
use Auth;

class MasyarakatController extends Controller
{
    public function __construct()
    {
        date_default_timezone_set('Asia/Jakarta');
    }

    public function index()
    {
        $data = Masyarakat::all();
        return view('masyarakat.index', compact('data'));
    }

    public function ajukanPengaduan()
    {
        $data = Masyarakat::where('user_id', auth()->user()->id)->first();
        return view('masyarakat.ajukan_pengaduan', compact('data'));
    }


    public function detailPengaduan($id)
    {
        $data = Pengaduan::where('id', $id)->with('Masyarakat')->first();
        return view('masyarakat.detail-pengaduan', compact('data'));
    }

    public function  postPengaduan(Request $request)
    {
        $this->validate($request, [
            'judul'             =>  'required',
            'teks_pengaduan'    =>  'required',
            'file'              =>  'file|mimes:.jpeg,jpg,png|max:2048'
        ]);

        $user = Auth::user();
        $masyarakat = Masyarakat::where('user_id', $user->id)->first();

        if ($request->file) {
            $time = time();
            $id   = uniqid();
            $file = $request->file;
            $fileName  = $time . $id . '.' . $file->getClientOriginalExtension();
            $moveto = 'images/pengaduan';
            $file->move($moveto, $fileName);
        }else{
            $fileName = '';
        }

        Pengaduan::create([
            'judul'             => htmlspecialchars($request->judul),
            'masyarakat_id'     => $masyarakat->id,
            'teks_pengaduan'    => htmlspecialchars($request->teks_pengaduan),
            'foto'              => $fileName,
            'status'            => 'terkirim',
            'user_id'           => $user->id
        ]);

        return redirect()->route('pengaduan.index')->with('success', 'Pengaduan telah dikirimkan. Tunggu respon dari petugas dalam 1x24 jam. Terima kasih.');
    }

    public function hapus($id)
    {
        $masyarakat = Masyarakat::find($id)->delete();

        return redirect()->route('masyarakat.index')->with('success', 'Data telah berhasi dihapus!');
    }

    public function batalkanPengaduan($id)
    {
        $data = Pengaduan::find($id);
        $data->update([
            'status'    =>  'dibatalkan'
        ]);

        return redirect()->back()->with('success', 'Pengaduan No.'.$data->id.' telah Anda batalkan.');
    }
}
