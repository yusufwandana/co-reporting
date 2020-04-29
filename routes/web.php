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
    return view('welcome');
});

Route::get('login', 'AuthController@index')->name('login');
Route::get('register', 'AuthController@register')->name('register');
Route::post('login/post', 'AuthController@login')->name('postlog');
Route::post('register/post', 'AuthController@postreg')->name('postreg');
Route::get('logout', 'AuthController@logout')->name('logout');

// MENU ADMIN
Route::get('admin/dashboard', 'DashboardController@admin')->name('dashboard.admin');
Route::get('pengaduan-proses', 'AdminController@pengaduanProses')->name('pengaduan.proses');
Route::get('pengaduan-respon', 'AdminController@tanggapiPengaduan')->name('pengaduan.tanggapi');
Route::get('pengaduan-selesai/{id}', 'AdminController@selesaiPengaduan')->name('pengaduan.selesai');
Route::get('pengaduan/beri-tanggapan/{id}', 'AdminController@beriTanggapan')->name('beri.tanggapan');
Route::get('pengaduan/detail-pengaduan/{id}', 'AdminController@detailPengaduan')->name('detail.pengaduan');
Route::get('masyarakat/detail-pengaduan/{id}', 'MasyarakatController@detailPengaduan')->name('masyarakat.detail');
Route::post('pengaduan/tanggapan/post', 'AdminController@postTanggapan')->name('post.tanggapan');

// MENU MASYARAKAT
Route::get('dashboard/masyarakat', 'DashboardController@masyarakat')->name('dashboard.masyarakat');
Route::get('ajukan-pengaduan', 'MasyarakatController@ajukanPengaduan')->name('pengaduan.ajukan');
Route::get('riwayat-pengaduan', 'MasyarakatController@riwayatPengaduan')->name('pengaduan.riwayat');
Route::post('riwayat-pengaduan', 'MasyarakatController@postPengaduan')->name('pengaduan.post');
