<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('login');
});

Route::get('login', 'AuthController@index')->name('login');
Route::get('register', 'AuthController@register')->name('register');
Route::post('login/post', 'AuthController@login')->name('postlog');
Route::post('register/post', 'AuthController@postreg')->name('postreg');
Route::get('logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth', 'cekRole:admin']], function(){
    Route::get('data-petugas', 'PetugasController@index')->name('petugas.index');
    Route::get('data-petugas/tambah', 'PetugasController@create')->name('petugas.create');
    Route::post('data-petugas/tambah/post', 'PetugasController@addPetugas')->name('petugas.add');
    Route::get('data-petugas/edit/{id}', 'PetugasController@edit')->name('petugas.edit');
    Route::post('data-petugas/update/{id}', 'PetugasController@update')->name('petugas.update');
    Route::get('data-petugas/hapus/{id}', 'PetugasController@hapus')->name('petugas.hapus');
    Route::get('data-masyarakat', 'MasyarakatController@index')->name('masyarakat.index');
    Route::get('data-masyarakat/hapus/{id}', 'MasyarakatController@hapus')->name('masyarakat.hapus');
    Route::get('print-laporan', 'AdminController@printLaporan')->name('print');
    Route::post('laporan/print', 'AdminController@printLaporanPost')->name('print.laporan');
});

Route::group(['middleware' => ['auth', 'cekRole:admin,petugas']], function(){
    Route::get('admin/dashboard', 'DashboardController@admin')->name('dashboard.admin');
    Route::get('pengaduan-proses', 'AdminController@pengaduanProses')->name('pengaduan.proses');
    Route::get('pengaduan-respon', 'AdminController@tanggapiPengaduan')->name('pengaduan.tanggapi');
    Route::get('pengaduan-selesai/{id}', 'AdminController@selesaiPengaduan')->name('pengaduan.selesai');
    Route::get('pengaduan-hapus/{id}', 'AdminController@hapusPengaduan')->name('pengaduan.hapus');
    Route::get('pengaduan/beri-tanggapan/{id}', 'AdminController@beriTanggapan')->name('beri.tanggapan');
    Route::get('pengaduan/detail-pengaduan/{id}', 'AdminController@detailPengaduan')->name('detail.pengaduan');
    Route::post('pengaduan/tanggapan/post', 'AdminController@postTanggapan')->name('post.tanggapan');
});

Route::group(['middleware' => ['auth', 'cekRole:admin,masyarakat']], function(){
    Route::get('dashboard/masyarakat', 'DashboardController@masyarakat')->name('dashboard.masyarakat');
    Route::get('masyarakat/detail-pengaduan/{id}', 'MasyarakatController@detailPengaduan')->name('masyarakat.detail');
    Route::get('ajukan-pengaduan', 'MasyarakatController@ajukanPengaduan')->name('pengaduan.ajukan');
    Route::get('riwayat-pengaduan', 'MasyarakatController@riwayatPengaduan')->name('pengaduan.riwayat');
    Route::post('riwayat-pengaduan', 'MasyarakatController@postPengaduan')->name('pengaduan.post');
});

