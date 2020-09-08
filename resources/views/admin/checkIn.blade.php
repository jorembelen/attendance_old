@extends('layouts.main')

@section('content')

 <!-- [ breadcrumb ] start -->
 <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-safari bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Check In Rules</h5>
                                            <span>Add your Check In Rules here!</strong></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="page-header-breadcrumb">
                                        <ul class=" breadcrumb breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="/home"><i class="fa fa-home"></i></a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="/home#!">Dashboard</a> </li>
                                            <li class="breadcrumb-item">
                                                <a href="#!">Check In Rules</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

                    <!-- Default ordering table start -->
                        <div class="card">
                        @include('sweetalert::alert')
                                                    <div class="card-header">
                                                    <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#addCheckIns"><i class="fa fa-plus-square"></i></button> 
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="order-table" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Rule Name</th>
                                                                        <th>Late Check In Time</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($checkIns as $checkIn) 
                                                                        <tr>
                                                                        <td>{{  $loop->iteration }}</td>
                                                                        <td>{{ $checkIn->rule_name }}</td>
                                                                        <td>{{ date('h:i A', strtotime($checkIn->checkIn_time)) }}</td>
                                                                        <td>
                                                                            <a href="#edit{{$checkIn->id}}" data-toggle="modal"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                            <a href="#delete{{$checkIn->id}}" data-toggle="modal"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                                        </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Rule Name</th>
                                                                        <th>Late Check In Time</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->

        @foreach($checkIns as $checkIn)  
        @include('includes.edit_delete_checkIn')
        @endforeach

                @include('includes.add_checkIn')

                

@endsection