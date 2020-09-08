@extends('layouts.main')

@section('content')

 <!-- [ breadcrumb ] start -->
 <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-slideshare bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Departments</h5>
                                        <span>Add your Departments here!</strong></span>
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
                                                <a href="#!">Departments</a>
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
                                                    <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#addDep"><i class="fa fa-user-plus"></i></button> 
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="order-table" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Department</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($departments as $department) 
                                                                        <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $department->dep_name }}</td>
                                                                        <td>
                                                                            <a href="#editDep{{$department->id}}" data-toggle="modal"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                            <a href="#delete{{$department->id}}" data-toggle="modal"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                                        </td>
                                                                        </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Department</th>
                                                                        <th>Tools</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->


        @foreach($departments as $department) 
        @include('includes.edit_delete_department')
        @endforeach

        @include('includes.add_department')

@endsection