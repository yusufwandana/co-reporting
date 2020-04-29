<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="admin/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="{{asset('public/template/admin/css/sb-admin-2.css')}}" rel="stylesheet">

</head>

<body class="bg-register-image" style="background: url({{asset('public/template/img/home2.jpeg')}}); background-position: center; background-size: cover;">
<div style="position: absolute;top: 0;bottom: 0;left: 0;right: 0;background-color: black;opacity: 0.6;"></div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-xl-12 col-lg-12 col-md-9 mt-5">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-7 d-none d-lg-block" style="background: url({{asset('public/template/img/home.jpeg')}}); background-position: center; background-size: cover;">
                <div style="text-shadow: 0 40px 60px;" class="text-light animated--grow-in col-lg d-lg-block justify-content-center container p-5">
                  <h2><b>Layanan Pengaduan Masyarakat</b></h2>
                  <p>Desa Cikampek Utara, Kecamatan Kotabaru Karawang</p>
                </div>
              </div>
              <div class="col-lg-5">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4 animated--grow-in">Selamat Datang !</h1>
                  </div>
                  <form action="{{route('postlog')}}" method="post">
                    @csrf
                    <div class="mt-5 form-group">
                      <input type="text" name="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukkan email..">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukkan password..">
                    </div>
                    <div class="custom-control custom-checkbox small">
                        <input type="checkbox" name="ingatkan" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Ingatkan Saya</label>
                    </div>
                    {{-- <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Username atau Password Salah !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Terdeteksi Kesalahan Token pada Akun anda !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Akun anda sedang dinonaktifkan !</b></center>
                      </div>
                    </div> --}}

                    <button type="submit" class="mt-4 btn btn-primary btn-user btn-block">Masuk</button>
                  </form>
                  <hr/>
                  <div class="text-center">
                    <a class="small" href="{{route('register')}}">Buat Akun!</a>
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
  <script src="{{asset('public/template/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/template/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/template/admin/js/sb-admin-2.min.js')}}"></script>

</body>

</html>