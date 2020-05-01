<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('public/template/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/template/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <title></title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md">
                <h3 class="text-center">Laporan Pengaduan Masyarakat</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <br>
                <table>
                    <tr>
                        <td>Dari</td>
                        <td>:</td>
                        <td>{{$dari}}</td>
                    </tr>
                    <tr>
                        <td>Sampai</td>
                        <td>:</td>
                        <td>{{$sampai   }}</td>
                    </tr>
                </table>
                <br>
                <div class="table-responsive">
                    <table class="table table-responsive table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Pengaduan</th>
                                <th>Tanggapan</th>
                                <th>Status</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{$item->masyarakat->nik}}</td>
                                    <td>{{ucwords($item->masyarakat->nama)}}</td>
                                    <td>{{$item->teks_pengaduan}}</td>
                                    @if ($item->tanggapan == null)
                                        <td>Belum ada tanggapan</td>
                                    @else
                                        <td>{{$item->tanggapan->teks_respon}}</td>
                                    @endif
                                    <td>{{strtoupper($item->status)}}</td>
                                    <td>{{$item->tanggal}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
  <script src="{{asset('public/template/admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('public/template/admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('public/template/admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('public/template/admin/js/sb-admin-2.min.js')}}"></script>

  <script type="text/javascript">
    $(document).ready(function(){
        window.print();
        setTimeout(function(){
            window.close();
        }, 2000);
    });
  </script>

</body>
</html>