@extends('layouts.master-petugas')

@section('title', 'Data Petugas')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- DataTales Example -->
        <div class="card shadow mb-4 animated--grow-in">
          <div class="card-header py-3">
              <div class="row">
                  <div class="col-md">
                      <h6 class="m-0 font-weight-bold text-primary float-left">DATA PETUGAS</h6>
                      <a href="{{route('petugas.create')}}" class="btn btn-success btn-sm float-right"><i class="fas fa-fw fa-plus"></i> Tambah</a>
                  </div>
              </div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>No. Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @php $no = 1; @endphp
                  @foreach ($data as $item)
                    <tr>
                      <td>{{$no++}}</td>
                      <td>{{ucwords($item->nama)}}</td>
                      <td>@if ($item->jk == 'l') Laki-laki @elseif($item->jk == 'p') Perempuan @endif</td>
                      <td>{{$item->no_telp}}</td>
                      <td>{{$item->user->email}}</td>
                      <td>{{$item->alamat}}</td>
                      <td>
                        <a href="{{route('petugas.edit', $item->id)}}" class="btn btn-warning btn-sm"><i class="fas fa-fw fa-pen"></i> Edit</a>
                        <a href="{{route('petugas.hapus', $item->id)}}" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Hapus</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        </div>
      </div>
      <!-- /.container-fluid -->
@endsection