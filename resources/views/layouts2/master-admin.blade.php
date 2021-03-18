<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>@yield('title')</title>
  <!-- Custom fonts for this template-->
  <link href="{{asset('template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="{{asset('template/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
  <!-- Custom styles for this page -->
  <link href="{{asset('template/admin/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>
<body id="page-top">
  <!-- Page Wrapper -->
  <div id="wrapper">

    @include('layouts.sidebar')

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        @include('layouts.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

          <!-- Content Row -->
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      @include('layouts.footer')

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
  {{-- <script src="{{asset('template/admin/vendor/chart.js/Chart.min.js')}}"></script> --}}

  <script src="{{asset('/template/admin/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('/template/admin/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
  <script src="{{asset('/template/admin/js/demo/datatables-demo.js')}}"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('#dataTablee').dataTable();
    });
  </script>

  <!-- Page level custom scripts -->
  {{-- <script src="{{asset('template/admin/js/demo/chart-area-demo.js')}}"></script>
  <script src="{{asset('template/admin/js/demo/chart-pie-demo.js')}}"></script> --}}

  <script type="text/javascript">
  Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
  Chart.defaults.global.defaultFontColor = '#858796';

  // Pie Chart Example
  var ctx = document.getElementById("bulet");

  var myPieChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
      labels: ["Diproses", "Selesai", "Belum ditanggapi"],
      datasets: [{
        // data: [<?= $errors;?>, <?= $persenselesai ?? '';?>, <?= $persenbelumditanggapi ?? '';?>],
        backgroundColor: ['#4e73df', '#1cc88a', '#f6c23e'],
        hoverBackgroundColor: ['#2e59d9', '#17a673', '#f6c25e'],
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
