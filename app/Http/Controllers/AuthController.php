<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Masyarakat;
use Auth;

class AuthController extends Controller
{
    public function index()
    {
        $user = User::all()->count();
        if ($user == 0) {
            User::create([
                'nama' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin'
            ]);
        }

        return view('auth.index');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt($request->only('email', 'password'))) {
            if (auth()->user()->role == 'admin') {
                return redirect()->route('dashboard.admin')->with('success', 'Selamat datang!');
            }elseif (auth()->user()->role == 'petugas') {
                return redirect()->route('dashboard.petugas')->with('success', 'Selamat datang!');
            }elseif (auth()->user()->role == 'masyarakat') {
                return redirect()->route('dashboard.masyarakat')->with('success', 'Selamat datang!');
            }else{
                return redirect()->back();
            }
        }else{
            return redirect()->back()->with('failed', 'Email atau password tidak cocok!');
        }
    }

    public function postreg(Request $request)
    {
        $this->validate($request, [
            'nama'  => 'required',
            'email' => 'required'
        ]);

        $user = User::create([
            'nama'      => $request->nama,
            'email'     => $request->email,
            'password'  => bcrypt($request->password1),
            'role'      => 'masyarakat'
        ]);

        Masyarakat::create([
            'nik'       =>  $request->nik,
            'nama'      =>  $request->nama,
            'jk'        =>  $request->jk,
            'no_telp'   =>  $request->telp,
            'alamat'    =>  $request->alamat,
            'user_id'   =>  $user->id
        ]);

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
