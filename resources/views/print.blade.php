<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cetak Laporan</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/template/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <link href="{{asset('public/template/admin/css/bootstrap.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

        <!-- Begin Page Content -->
        <div class="mt-4 container-fluid">
          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <div class="row">
                  <div class="col-md">
                      <h1 class="h3 text-grey-800">Data dan Grafik Pengaduan</h1>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md">
                      <a href="" class="btn btn-sm btn-primary shadow-sm" data-toggle="modal" data-target="#formModal"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</a>
                  </div>
              </div>
            {{-- <button class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</button>
            <button class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</button>
            <button class="btn btn-sm btn-primary shadow-sm"><i class="fas fa-print fa-sm text-white-50"></i> Cetak Laporan</button> --}}
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Belum Ditanggapi</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['belum']}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clock fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Pengaduan Diproses</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['proses']}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Selesai</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{$data['selesai']}}</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-check fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Pengaduan</div>
                      <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                          <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$data['jumlah']}}</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Content Row -->
          <div class="row">
            <!-- Content Column -->
            <div class="col-xl-8 col-lg-7">

              <!-- Project Card Example -->

              @php
                  $persen = 100;
                  $persenBelum = $data['belum'] / $data['jumlah'] * $persen;
                  $persenProses = $data['proses'] / $data['jumlah'] * $persen;
                  $persenSelesai = $data['selesai'] / $data['jumlah'] * $persen;


              @endphp

              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">PERSENTASE PENGADUAN</h6>
                </div>
                <div class="card-body">
                  <h4 class="small font-weight-bold">Belum Ditanggapi <span class="float-right">{{number_format($persenBelum, 2)}}%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-primary" role="progressbar" style="width: {{$persenBelum}}%" aria-valuenow="{{$persenBelum}}" aria-valuemin="0" aria-valuemax="100">{{$data['belum']}}</div>
                  </div>
                  <h4 class="small font-weight-bold">Sedang Diproses <span class="float-right">{{number_format($persenProses, 2)}}%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: {{$persenProses}}%" aria-valuenow="{{$persenProses}}" aria-valuemin="0" aria-valuemax="100">{{$data['proses']}}</div>
                  </div>
                  <h4 class="small font-weight-bold">Pengaduan Selesai <span class="float-right">{{number_format($persenSelesai, 2)}}%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: {{$persenSelesai}}%" aria-valuenow="{{$persenSelesai}}" aria-valuemin="0" aria-valuemax="100">{{$data['selesai']}}</div>
                  </div>
                </div>
              </div>   
            </div>
            <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="row">
                    <div class="col-md">
                        <div class="card shadow mb-4">
                          <!-- Card Header - Dropdown -->
                          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary">GRAFIK LINGKARAN (%)</h6>
                            {{-- <div class="dropdown no-arrow">
                              <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                <div class="dropdown-header">Dropdown Header:</div>
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                              </div>
                            </div> --}}
                          </div>
                          <!-- Card Body -->
                          <div class="card-body">
                            <div class="chart-pie pt-4 pb-2">
                              <canvas id="bulet"></canvas>
                            </div>
                            <div class="mt-4 text-center small">
                                <span class="mr-2">
                                    <i class="fas fa-circle text-primary"></i> Belum ditanggapi
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-warning"></i> Diproses
                                </span>
                                <span class="mr-2">
                                    <i class="fas fa-circle text-success"></i> Selesai
                                </span>
                            </div>
                          </div>
                        </div>
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
            <span>Copyright &copy; Sutan Kumala 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  {{-- Modal --}}
  <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('print.laporan')}}" method="post" target="_blank">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Filter Laporan</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="dari">Dari</label>
                                <input class="form-control" type="date" name="dari" id="dari">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="sampai">Sampai</label>
                                <input class="form-control" type="date" name="sampai" id="sampai">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih status..</option>
                                <option value="terkirim">Terkirim (Belum ditanggapi)</option>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary float-right">Print sekarang</button>
                </div>
            </div>
        </form>
    </div>
</div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/template/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/template/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/template/admin/js/sb-admin-2.min.js')}}"></script>

  <!-- Page level plugins -->
  <script src="{{asset('public/template/admin/vendor/chart.js/Chart.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('public/template/admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('public/template/admin/js/demo/chart-pie-demo.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('#cetak').on('click', function(){
            $('#cetak').remove();
            window.print();
        });
    });
  </script>
  <script type="text/javascript">
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  // Pie Chart Example
  var ctx = document.getElementById("bulet");
  
  var myPieChart = new Chart(ctx, {
    type: 'pie',
    data: {
      labels: ["Belum ditanggapi", "Diproses", "Selesai"],
      datasets: [{
        data: [ {{number_format($persenProses, 2)}}, {{number_format($persenSelesai, 2)}}, {{number_format($persenBelum, 2)}}],
        backgroundColor: ['#4e73df', '#f6c23e', '#1cc88a'],
        hoverBackgroundColor: ['#2e59d9', '#f6c25e', '#17a673'],
        hoverBorderColor: "rgba(234, 236, 244, 1)",
      }],
    },
    options: {
      maintainAspectRatio: false,
      tooltips: {
        backgroundColor: "rgb(255,255,255)",
        bodyFontColor: "#858796",
        borderColor: '#dddfeb',
        borderWidth: 1,
        xPadding: 15,
        yPadding: 15,
        displayColors: false,
        caretPadding: 10,
      },
      legend: {
        display: false
      },
      cutoutPercentage: 80,
    },
  });

  </script>
</body>

</html>
