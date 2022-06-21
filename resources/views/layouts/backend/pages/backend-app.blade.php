@extends('layouts.backend.backend-master')
@section('content')
<div class="row text-center">
    <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="card-box widget-flat border-custom bg-custom text-white">
            <i class="fi-tag"></i>
            <h3 class="m-b-10">25563</h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Total tickets</p>
        </div>
    </div>
    <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="card-box bg-primary widget-flat border-primary text-white">
            <i class="fi-archive"></i>
            <h3 class="m-b-10">6952</h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Pending Tickets</p>
        </div>
    </div>
    <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="card-box widget-flat border-success bg-success text-white">
            <i class="fi-help"></i>
            <h3 class="m-b-10">18361</h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Closed Tickets</p>
        </div>
    </div>
    <div class="col-sm-6 col-lg-6 col-xl-3">
        <div class="card-box bg-danger widget-flat border-danger text-white">
            <i class="fi-delete"></i>
            <h3 class="m-b-10">250</h3>
            <p class="text-uppercase m-b-5 font-13 font-600">Deleted Tickets</p>
        </div>
    </div>
</div>
<!-- end row -->
@endsection
