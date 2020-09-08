@extends('layouts.main')

@section('content')


  <!-- [ breadcrumb ] start -->
  <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-users bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Employees</h5>
                                            <span>Add your employees here!</strong></span>
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
                                                <a href="#!">Employees</a>
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
                                                    <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#addEmp"><i class="fa fa-user-plus"></i></button> 
                                                    <a class="btn btn-grd-primary" href="https://www.qrcode-monkey.com/#text" target="_blank"><i class="fa fa-qrcode"></i>Generate QR Code</a> 
                                                    </div>
                                                    <div class="card-block">
                                                    @include('includes.errors')   
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Barcode ID</th>
                                                                        <th>Name</th>
                                                                        <th>Department</th>
                                                                        <th>Position</th>
                                                                        <th>Location</th>
                                                                        <th>Contact No.</th>
                                                                        <th>Late Time In</th>
                                                                        <th>Early Out Rule</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($employees as $employee)
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $employee->uuid }}</td>
                                                                        <td>{{ $employee->name }}</td>
                                                                        <td>{{ $employee->department }}</td>
                                                                        <td>{{ $employee->position }}</td>
                                                                        <td>{{ $employee->address }}</td>
                                                                        <td>{{ $employee->contact }}</td>
                                                                        <td>{{ date('h:i A', strtotime($employee->checkIn_time)) }}</td>
                                                                        <td>{{  date('h:i A', strtotime($employee->checkOut_time)) }}</td>
                                                                    <td>
                                                                        <a href="#edit{{$employee->uuid}}" data-toggle="modal"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                        <a href="#delete{{$employee->uuid}}" data-toggle="modal"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                                    </td>
                                                                    </tr>
                                                                @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Barcode ID</th>
                                                                        <th>Name</th>
                                                                        <th>Department</th>
                                                                        <th>Position</th>
                                                                        <th>Location</th>
                                                                        <th>Contact No.</th>
                                                                        <th>Late Time In</th>
                                                                        <th>Early Out Rule</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->

            @foreach( $employees as $employee)
            @include('includes.edit_delete_employee')
            @endforeach

            @include('includes.add_employee')


@endsection



