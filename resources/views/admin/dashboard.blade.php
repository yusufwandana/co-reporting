@extends('layouts.master-admin')

@section('title', 'Dashboard')

@section('content')
<!-- [ Main Content ] start -->
<div class="row">
    <!-- product profit start -->
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card bg-c-red">
            <div class="card-body">
                <div class="row align-items-center m-b-25">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Total Profit</h6>
                        <h3 class="m-b-0 text-white">$1,783</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                    </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From Previous Month</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card bg-c-blue">
            <div class="card-body">
                <div class="row align-items-center m-b-25">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Total Orders</h6>
                        <h3 class="m-b-0 text-white">15,830</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-database text-c-blue f-18"></i>
                    </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From Previous Month</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card bg-c-green">
            <div class="card-body">
                <div class="row align-items-center m-b-25">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Average Price</h6>
                        <h3 class="m-b-0 text-white">$6,780</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign text-c-green f-18"></i>
                    </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From Previous Month</p>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card prod-p-card bg-c-yellow">
            <div class="card-body">
                <div class="row align-items-center m-b-25">
                    <div class="col">
                        <h6 class="m-b-5 text-white">Product Sold</h6>
                        <h3 class="m-b-0 text-white">6,784</h3>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-tags text-c-yellow f-18"></i>
                    </div>
                </div>
                <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From Previous Month</p>
            </div>
        </div>
    </div>
    <!-- product profit end -->
</div>
<!-- [ Main Content ] end -->
@endsection
