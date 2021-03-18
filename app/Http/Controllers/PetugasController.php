<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;
use App\User;

class PetugasController extends Controller
{
    public function index()
    {
        $data = Petugas::all();
        return view('petugas.index', compact('data'));
    }

    public function create()
    {
        return view('petugas.create');
    }

    public function addPetugas(Request $request)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'email'     => 'required|email',
            'jk'        => 'required',
            'no_telp'   => 'required|min:10|max:15',
            'password'  => 'required|alpha_num|min:6',
            'alamat'    => 'required'
        ]);

        $user = User::create([
            'nama'      =>  ucwords($request->nama),
            'email'     =>  $request->email,
            'password'  =>  bcrypt($request->password),
            'role'      =>  'petugas'
        ]);

        Petugas::create([
            'nama'      =>  ucwords($request->nama),
            'jk'        =>  $request->jk,
            'no_telp'   =>  $request->no_telp,
            'alamat'    =>  ucwords($request->alamat),
            'user_id'   =>  $user->id
        ]);

        return redirect()->route('petugas.index')->with('success', 'Petugas telah berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $data = Petugas::where('id', $id)->with('User')->first();

        return view('petugas.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'      => 'required',
            'jk'        => 'required',
            'no_telp'   => 'required|min:10|max:15',
            'alamat'    => 'required'
        ]);

        $data = Petugas::find($id);
        $data->nama     = ucwords($request->nama);
        $data->jk       = $request->jk;
        $data->no_telp  = $request->no_telp;
        $data->alamat   = ucwords($request->alamat);
        $data->save();

        $user = User::find($data->user_id);
        $user->nama     =   ucwords($request->nama);
        $user->save();

        return redirect()->route('petugas.index')->with('success', 'Data petugas telah berhasil diupdate!');
    }

    public function hapus($id)
    {
        $petugas = Petugas::find($id);
        User::find($petugas->user_id)->delete();
        return redirect()->back()->with('success', 'Data petugas berhasil dihapus!');
    }
}
