@extends('layouts.main')

@section('content')

  <!-- [ breadcrumb ] start -->
  <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-user bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Admin Users</h5>
                                            <span>List of Admin Users</strong></span>
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
                                                <a href="#!">Admin Users</a>
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
                                                    <button class="btn btn-primary btn-outline-primary" data-toggle="modal" data-target="#addAdminUser"><i class="fa fa-user-plus"></i></button> 
                                                    </div>
                                                    <div class="card-block">
                                                    @include('includes.errors') 
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="order-table" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Role</th>
                                                                    <th>Tools</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @foreach ($adminUsers as $adminUser)
                                                                        <tr>
                                                                        <td>{{ $adminUser->name }}</td>
                                                                        <td>{{ $adminUser->email }}</td>
                                                                        <td>
                                                                            @if ( $adminUser->role == 0 )
                                                                                User
                                                                            @elseif( $adminUser->role == 1 )
                                                                                Admin
                                                                            @else
                                                                                Super Admin
                                                                            @endif
                                                                        </td>
                                                                        <td>
                                                                            <a href="#edit{{$adminUser->id}}" data-toggle="modal"><i class="icon feather icon-edit f-w-600 f-16 m-r-15 text-c-green"></i></a>
                                                                            <a href="#delete{{$adminUser->id}}" data-toggle="modal"><i class="feather icon-trash-2 f-w-600 f-16 text-c-red"></i></a>
                                                                        </td>
                                                                        </tr>
                                                                @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                    <th>Name</th>
                                                                    <th>Email</th>
                                                                    <th>Role</th>
                                                                    <th>Tools</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->

            @foreach( $adminUsers as $adminUser)
            @include('includes.edit_delete_adminUsers')
            @endforeach

            @include('includes.add_adminUser')

@endsection



