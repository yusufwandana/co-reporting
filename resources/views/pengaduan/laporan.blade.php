@extends('layouts.master-admin')

@section('content')

<div class="row">
    <div class="col-md">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Grafik Data Pengaduan</h5>
            </div>
            <div class="card-body">

                {!! $chart->container() !!}

                {!! $chart->script() !!}

            </div>
        </div>
    </div>
</div>

@endsection
