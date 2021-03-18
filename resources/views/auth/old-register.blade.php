<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Daftar</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="admin/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="{{asset('template/admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-register-image" style="background: url({{asset('template/img/home2.jpeg')}}); background-position: center; background-size: cover;">
<div style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;opacity: 0.6;"></div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-7 col-lg-10 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-5">Buat Akun !</h1>
                  </div>
                  <form action="{{route('postreg')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <input required="required" minlength="0" maxlength="17" type="number" name="nik" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan NIK..">
                        <small class="text-danger">{{$errors->first('nik')}}</small>
                    </div>
                    <div class="form-group">
                        <input required="required" type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan nama.. (sesuai KTP)">
                        <small class="text-danger">{{$errors->first('nama')}}</small>
                    </div>
                    <div class="form-group">
                      <select name="jk" id="jk" class="form-control form-control-user" required>
                          <option value="Pilih jenis kelamin..">Pilih jenis kelamin..</option>
                          <option value="l">Laki-laki</option>
                          <option value="p">Perempuan</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input required="required" type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan email..">
                      <small class="text-danger">{{$errors->first('email')}}</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input required="required" type="password" name="password1" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketik password..">
                                <small class="text-danger">{{$errors->first('password1')}}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input required="required" type="password" name="password2" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Konfirmasi password..">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                      <input required="required" type="number" name="telp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan nomor telepon..">
                    </div>
                    <div class="form-group">
                      <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control form-control-user" placeholder="Masukan alamat.."></textarea>
                    </div>
                    {{-- <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Username <u><?= $_GET['username'];?></u> tidak Tersedia !</b></center>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">NIK <u><?= $_GET['nik'];?></u> telah Terdaftar !</b></center>
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">NIK hanya boleh berupa Angka !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Konfirmasi Password tidak valid !</b></center>
                      </div>
                    </div> --}}

                    <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div> -->
                  <div class="text-center">
                    <a class="small" href="{{route('login')}}">Login!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('template/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('template/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('template/admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
