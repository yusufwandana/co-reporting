@extends('layouts.master-petugas')

@section('title', 'Data Petugas')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <div class="container">
      
          <!-- Outer Row -->
          <div class="row justify-content-center animated--grow-in">
      
            <div class="col-xl col-lg col-md">
      
              <div class="card o-hidden border-0">
                <div class="card-body p-0">
                  <!-- Nested Row within Card Body -->
                  <div class="row">
                    <div class="col-lg">
                      <div class="p-5">
                        <h1 class="h4 text-gray-900 mb-4">Tambahkan Petugas</h1>
                        <hr>
                        <form action="{{route('petugas.add')}}" method="post">
                          @csrf
                          <div class="row">
                              <div class="col-md-6">
                                  <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" placeholder="Masukkan nama.." class="form-control form-control-user" required value="{{old('nama')}}">
                                    <small class="text-danger">{{$errors->first('nama')}}</small>
                                  </div>
                                  <div class="form-group">
                                    <label for="jk">Jenis kelamin</label>
                                    <select name="jk" id="jk" class="form-control">
                                        <option value="" selected disabled>Pilih jenis kelamin..</option>
                                        <option value="l">Laki-laki</option>
                                        <option value="p">Perempuan</option>
                                    </select>
                                  </div>
                                  <div class="form-group">
                                    <label for="no_telp">Nomor telepon</label>
                                    <input type="number" id="no_telp" name="no_telp" placeholder="Masukkan nomor telepon.." class="form-control form-control-user" required value="{{old('no_telp')}}">
                                  </div>
                              </div>
                              <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" id="email" name="email" placeholder="Masukkan email.." class="form-control form-control-user" required value="{{old('email')}}">
                                  </div>
                                  <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" id="password" name="password" placeholder="Masukkan password.." class="form-control form-control-user" required>
                                    <small class="text-danger">{{$errors->first('password')}}</small>
                                  </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea type="text" name="alamat" id="alamat" required="required" rows="5" cols="5" name="teks_masalah" class="form-control form-control-user" placeholder="Masukkan alamat...">{{old('alamat')}}</textarea>
                                </div>        
                              </div>
                          </div>
                          <hr>
                          <button type="submit" class="btn btn-success btn-user btn-block">Tambah</button>
                        </form>
                        <hr>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
      
            </div>
      
          </div>
      
        </div>
              </div>
              <!-- /.container-fluid -->
@endsection