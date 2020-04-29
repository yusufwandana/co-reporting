<?php
require("../config/fungsi.php");
if(isset($_POST['register'])){
  if($_POST['password1']==$_POST['password2']){
    register($_POST['nik'], $_POST['nama'], $_POST['username'], $_POST['password2'], $_POST['telp']);
  }else{
    header("Location:?berhasil=keynotvalid");
  }
}
?>
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
  <link href="admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <!-- <link href="admin/css/sb-admin-2.min.css" rel="stylesheet"> -->
  <link href="admin/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-register-image">
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
                    <h1 class="h4 text-gray-900 mb-4">Buat Akun !</h1>
                  </div>
                  <form method="POST" action="">
                    <div class="form-group">
                      <input required="required" minlength="0" maxlength="17" type="number" name="nik" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="NIK">
                    </div>
                    <div class="form-group">
                      <input required="required" type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Nama Lengkap (Sesuai KTP)">
                    </div>
                    <div class="form-group">
                      <input required="required" type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input required="required" type="password" name="password1" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ketik Password">
                    </div>
                    <div class="form-group">
                      <input required="required" type="password" name="password2" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Konfirmasi Password">
                    </div>
                    <div class="form-group">
                      <input required="required" type="number" name="telp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nomor Telepon">
                    </div>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="register"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-primary">Pendaftaran Berhasil, Silahkan <a href="index.php"><u>Masuk</u></a> !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="duplikat"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Username <u><?= $_GET['username'];?></u> tidak Tersedia !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="duplikatnik"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">NIK <u><?= $_GET['nik'];?></u> telah Terdaftar !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="error_value"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">NIK hanya boleh berupa Angka !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
<?php
if(isset($_GET['berhasil'])){
  if($_GET['berhasil']=="keynotvalid"){
?>
                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Konfirmasi Password tidak valid !</b></center>
                      </div>
                    </div>
<?php
  }
}
?>
                    <input type="submit" name="register" value="Daftar" class="btn btn-primary btn-user btn-block">
                  </form>
                  <hr>
                  <!-- <div class="text-center">
                    <a class="small" href="forgot-password.html">Lupa Password?</a>
                  </div> -->
                  <div class="text-center">
                    <a class="small" href="index.php">Login!</a>
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
  <script src="admin/vendor/jquery/jquery.min.js"></script>
  <script src="admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="admin/js/sb-admin-2.min.js"></script>

</body>

</html>