
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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

<div class="shadow fixed-left bg-light card" style="display: inline;position: fixed;padding: 8px;">
  <a href="index.php"><button class="btn btn-primary"><b>Dashboard</b></button></a>
</div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center animated--grow-in">

      <div class="col-xl-7 col-lg-10 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Buat Akun Petugas</h1>
                  </div>
                  <form method="POST" action="">
                    <div class="form-group">
                      <input required="required" type="text" name="nama_petugas" class="form-control form-control-user" id="exampleInputEmail" value="<?php if(!empty($petugas)){ echo $petugas['nama_petugas']; }?>" aria-describedby="emailHelp" placeholder="Nama Petugas">
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
                    <div class="form-group">
                      <small>Level</small>
                      <select required="required" name="level" class="form-control form-control-user" id="exampleInputPassword" placeholder="Level">
                        <option value="petugas">Petugas</option>
                        <option value="admin">Administrator</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-primary">Akun Petugas Berhasil dibuat !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Username <u></u> tidak Tersedia !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-danger">Konfirmasi Password tidak valid !</b></center>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="small">
                        <center><b align="center" class="text-primary">Data petugas berhasil diubah !</b></center>
                      </div>
                    </div>

                    <input type="submit" name="register_petugas" value="Buat Akun" class="btn btn-primary btn-user btn-block">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>


<!-- Modal -->
<?php
if(isset($_GET['ubah_petugas'])){?>
  <script type="text/javascript">window.onload = function(){document.getElementById('tombol').click();}</script>
  <input id="tombol" data-toggle="modal" data-target="#exampleModal" type="hidden">
<?php
  }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data Petugas <?= "[ID: ".$_GET['ubah_petugas']."]";?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form method="POST" action="">
                    <div class="form-group">
                      <small>Nama Petugas</small>
                      <input required="required" type="text" name="nama_petugas" class="form-control form-control-user" id="exampleInputEmail" value="<?php if(!empty($petugas)){ echo $petugas['nama_petugas']; }?>" aria-describedby="emailHelp" placeholder="Nama Petugas">
                    </div>
                    <div class="form-group">
                      <small>Username (Tidak boleh diubah)</small>
                      <input readonly="readonly" required="required" type="text" name="username" class="form-control form-control-user" value="<?php if(!empty($petugas)){ echo $petugas['username']; }?>" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <small>Ubah Password Baru (Kosongkan Jika tidak ingin diubah !)</small>
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Ubah Password">
                    </div>
                    <div class="form-group">
                      <small>Nomor Telepon</small>
                      <input required="required" value="<?php if(!empty($petugas)){ echo $petugas['telp']; }?>" type="number" name="telp" class="form-control form-control-user" id="exampleInputPassword" placeholder="Nomor Telepon">
                    </div>
                    <div class="form-group">
                      <small>Level</small>
                      <select required="required" name="level" class="form-control form-control-user" id="exampleInputPassword" placeholder="Level">
                        <option value="petugas">Petugas</option>
                        <option value="admin">Administrator</option>
                      </select>
                    </div>

      </div>
      <div class="modal-footer">
        <input type="submit" onclick="return confirm('Konfirmasi Perubahan ?');" name="ubah_petugas" value="Simpan Perubahan" class="btn btn-primary btn-user btn-block">
      </div>
      </form>
    </div>
  </div>
</div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 animated--grow-in">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Petugas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Nama Petugas</th>
                      <th>Username</th>
                      <th>Password</th>
                      <th>Telepon</th>
                      <th>Level</th>
                      <th>Opsi</th>
                    </tr>
                  </tfoot>
                  <tbody>
<?php
  $out = mysqli_query($koneksi, "SELECT * FROM petugas where level!='admin' ");
  while($keluar = mysqli_fetch_array($out)){
?>

                    <tr>
                      <td><?php echo $keluar['id_petugas'];?></td>
                      <td><?php echo $keluar['nama_petugas'];?></td>
                      <td><?php echo $keluar['username'];?></td>
                      <td><?php echo $keluar['password'];?></td>
                      <td><?php echo $keluar['telp'];?></td>
                      <td><?php echo $keluar['level'];?></td>
                      <td> &nbsp; 
                        <?php if($keluar['level']=="nonaktif"){ ?>
                          <a onclick="return confirm('Yakin ingin Mengaktifkan Akun : \n<?php echo $keluar['nama_petugas'];?>');" href="?aktifkan=<?php echo $keluar['id_petugas'];?>" class="btn btn-success">Aktifkan</span></a>
                        <?php }else{ ?>
                          <a onclick="return confirm('Yakin ingin Menonaktikan Akun : \n<?php echo $keluar['nama_petugas'];?>');" href="?nonaktif=<?php echo $keluar['id_petugas'];?>" class="btn btn-danger">Nonaktifkan</span></a>
                        <?php } ?>
                        <a title="Ubah" href="?ubah_petugas=<?php echo $keluar['id_petugas'];?>" class="btn btn-primary"><span class="fas fa-fw fa-pen"></span></a></td>
                    </tr>
<?php
}
?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>