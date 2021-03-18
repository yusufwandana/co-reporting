<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Pengaduan</title>

  <!-- Custom fonts for this template -->
  <link href="{{asset('template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="{{asset('template/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="{{asset('template/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

   <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Pengaduan <sup>Masyarakat</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="{{route('dashboard.' . auth()->user()->role)}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('pengaduan.ajukan')}}">
          <i class="fas fa-fw fa-cog"></i>
          <span>Ajukan Pengaduan</span>
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('pengaduan.riwayat')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Riwayat Pengaduan</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-success" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

        <!-- Topbar Navbar -->
            @include('layouts.topbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4 animated--grow-in">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-success float-left">Detail Pengaduan</h6>
              <a href="{{URL::previous()}}" class="badge badge-warning float-right">Kembali</a>
            </div>
            <div class="card-body">
              <div class="row">
                  <div class="col-md">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md">
                                      <h5 class="float-left"><b>Detail Laporan dari {{ucwords($data->masyarakat->nama)}}</b></h5>
                                      <h6 class="float-right">Laporan dikirim pada : <b>{{$data->tanggal}}</b></h6>
                                  </div>
                              </div>
                              <div class="row">
                                  <div class="col-md">
                                      <h6 class="float-left">NIK. {{ucwords($data->masyarakat->nik)}}</h6>
                                      <h6 class="float-right">Status Laporan : <b class="@if ($data->status == 'terkirim') text-primary @elseif ($data->status == 'proses') text-warning @elseif ($data->status == 'selesai') text-success @endif">{{strtoupper($data->status)}}</b></h6>
                                  </div>
                              </div>
                              <hr>
                              <div class="row">
                                  <div class="col-md">
                                    <div class="form-group">
                                        <label><b>ISI LAPORAN PENGADUAN</b></label>
                                        <textarea rows="5" class="form-control form-control-user" readonly="readonly">{{$data->teks_pengaduan}}</textarea>
                                    </div>
                                  </div>
                                  <div class="col-md">
                                    <div class="form-group">
                                        <label class="float-left"><b>TANGGAPAN PENGADUAN</b></label>
                                        <a class="float-right" href="{{url('images/pengaduan/' . $data->foto)}}" target="_blank">Lihat bukti disini..</a>
                                        <textarea rows="5" class="form-control form-control-user" readonly="readonly">@if ($data->tanggapan == null)Belum ada tanggapan. @else {{$data->tanggapan->teks_respon}} @endif</textarea>
                                    </div>
                                  </div>
                              </div>
                            {{-- <div class="form-group text-center">
                              <a href="{{url('images/pengaduan/' . $data->foto)}}" target="_blank"><img src="{{asset('images/pengaduan/' . $data->foto)}}" style="width: 150px;height: auto;"></a> <br><br>
                              <small><i>*Bukti pengaduan</i></small>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>NIK Pelapor</label>
                                      <input value="{{$data->masyarakat->nik}}" required="required" type="text" class="form-control form-control-user" id="exampleInputEmail" readonly="readonly" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                      <label>Nama Pelapor</label>
                                      <input value="{{ucwords($data->masyarakat->nama)}}" required="required" type="text" class="form-control form-control-user" id="exampleInputEmail" readonly="readonly" aria-describedby="emailHelp" placeholder="Nama Lengkap">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                              <label>Isi Laporan Pengaduan</label>
                              <textarea rows="5" class="form-control form-control-user" readonly="readonly">{{$data->teks_pengaduan}}</textarea>
                            </div><hr/>
                            <div class="form-group">
                              <label>Tanggapan</label>
                              <textarea class="form-control form-control-user" rows="5" placeholder="Berikan tanggapan Anda.." name="teks_tanggapan" readonly>{{$data->tanggapan->teks_respon}}</textarea>
                            </div><hr/> --}}
                          </div>
                      </div>
                  </div>
              </div>
            </div>
          </div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tanggapan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Client 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="{{route('logout')}}">Logout</a>
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

  <!-- Page level plugins -->
  <script src="{{asset('template/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('template/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('template/admin/js/demo/datatables-demo.js')}}"></script>

</body>

</html>
