
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Detail Pengaduan</title>

  <!-- Custom fonts for this template-->
  <link href="{{asset('public/template/admin/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('public/template/admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-9 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <h5 class="h5 text-gray-900 mb-4 text-center">Pengaduan ditulis pada Tanggal <span class="text-info">{{$data->tanggal}}</span></h5>
                  <form method="POST" action="{{route('post.tanggapan')}}">
                    @csrf
                    <input type="hidden" name="pengaduan_id" value="{{$data->id}}">
                    <div class="form-group text-center">
                      <a href="{{url('public/images/pengaduan/' . $data->foto)}}" target="_blank"><img src="{{asset('public/images/pengaduan/' . $data->foto)}}" style="width: 150px;height: auto;"></a> <br><br>
                      <small><i>*Bukti pengaduan</i></small>
                        {{-- <img src="{{asset('public/template/file_upload/')}}" style="width: 150px; height: auto;"> --}}
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
                    </div><hr/>
                  </form>
                  <a href="{{URL::previous()}}" class="btn btn-block btn-primary">kembali</a>
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