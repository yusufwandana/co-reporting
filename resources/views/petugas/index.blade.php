@extends('layouts.master-admin')

@section('title', 'Data Petugas')

@section('content')
<div class="card shadow mb-4 animated--grow-in">
    <div class="card-header py-3">
        <div class="row">
            <div class="col-md">
                <h5 class="font-weight-bold mt-2">
                    Data Petugas
                </h5>
                @if (Auth::user()->role == 'admin')
                <a href="{{route('petugas.create')}}" class="btn btn-outline-primary btn-sm float-right">
                    <i class="fas fa-plus"></i>
                    Tambah petugas baru
                </a>
                @endif
            </div>
        </div>
    </div>
    <div class="card-body">
    @if($msg = Session::get('failed'))
        <div class="alert alert-danger">
            {{$msg}}
        </div>
    @elseif($msg = Session::get('success'))
        <div class="alert alert-success">
            {{$msg}}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-bordered table-sm" id="dataTable" cellspacing="0">
        <thead>
            <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>No. Telepon</th>
            <th>Alamat</th>
            @if (Auth::user()->role == 'admin')
            <th width="100px">Aksi</th>
            @endif
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
                <td>{{$item->alamat}}</td>
                @if (Auth::user()->role == 'admin')
                <td>
                    <form action="{{route('petugas.hapus', $item->id)}}" method="post">
                        @csrf @method('delete')
                        <a href="{{route('petugas.edit', $item->id)}}" class="btn btn-outline-warning btn-sm"><i class="fas fa-pen"></i>Edit</a>
                        <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                            <i class="fas fa-trash"></i>Hapus
                        </button>
                    </form>
                </td>
                @endif
            </tr>
            @endforeach
        </tbody>
        </table>
    </div>
    </div>
</div>
@endsection
