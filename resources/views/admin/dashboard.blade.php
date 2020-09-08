@extends('layouts.main')

@section('content')

  <!-- [ breadcrumb ] start -->
  <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-home bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Dashboard</h5>
                                            <span>{{ $greetings }} <strong> {{ Auth::user()->name}}</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/home"><i class="fa fa-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

<div class="row">
  <!-- product profit start -->
  <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-red">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">Total Employees</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white">{{$data[0]}}</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fa fa-users text-c-red f-18"></i>
                                                            </div>
                                                        </div>
                                                        <a href="/employees#!" class="m-b-0 text-white"><span class="label label-danger m-r-10">>></span>More info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-blue">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                            <h6 class="m-b-5 text-white">On Time Percentage</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white">{{$data[3]}}<span class="label label-primary m-r-10">%</span></h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fa fa-clock text-c-blue f-18"></i>
                                                            </div>
                                                        </div>
                                                        <a href="/attendance_today#!" class="m-b-0 text-white"><span class="label label-primary m-r-10">>></span>More info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-green">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">On Time Today</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white">{{$data[1]}}</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fa fa-star text-c-green f-18"></i>
                                                            </div>
                                                        </div>
                                                        <a href="/onTime#!" class="m-b-0 text-white"><span class="label label-success m-r-10">>></span>More info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-3 col-md-6">
                                                <div class="card prod-p-card card-yellow">
                                                    <div class="card-body">
                                                        <div class="row align-items-center m-b-30">
                                                            <div class="col">
                                                                <h6 class="m-b-5 text-white">Late Today</h6>
                                                                <h3 class="m-b-0 f-w-700 text-white"> {{$data[2]}}</h3>
                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="fa fa-user-times text-c-yellow f-18"></i>
                                                            </div>
                                                        </div>
                                                        <a href="/onTime#!" class="m-b-0 text-white"><span class="label label-warning m-r-10">>></span>More info</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- product profit end -->
                                            </div>
                                        <!-- [ page content ] end -->

@endsection