@extends('layouts.main')

@section('content')


 <!-- [ breadcrumb ] start -->
 <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-clock-o bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Attendance Today</h5>
                                            <span>All records for Attendance Today will be viewed here!</strong></span>
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
                                                <a href="#!">Attendance Today</a>
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
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Date</th>
                                                                        <th>Employees Name</th>
                                                                        <th>Time In</th>
                                                                        <th>Time Out</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach ($timeIns as $timeIn) 
                                                                    <tr>
                                                                        <td>{{ $loop->iteration }}</td>
                                                                        <td>{{ $timeIn->in_date ? $timeIn->in_date->format('M-d-Y') : null }}</td>  
                                                                        <td>{{ $timeIn->employees->name }}</td>
                                                                        <td>{{ date('h:i A', strtotime($timeIn->time_in)) }}
                                                                            @if( $timeIn->in_status == 1 )
                                                                            @else
                                                                                <button class="label label-danger"> Late</button>
                                                                            @endif
                                                                        </td>
                                                                        <td>{!! $timeIn->time_out ? date('h:i A', strtotime($timeIn->time_out)) : null !!}
                                                                            @if( $timeIn->out_status == 1 )
                                                                            @else( $timeIn->out_status == '0' )
                                                                                <button class="label label-danger"> Early Out</button>
                                                                            @endif
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                                <tfoot>
                                                                    <tr>
                                                                        <th>SN</th>
                                                                        <th>Date</th>
                                                                        <th>Employees Name</th>
                                                                        <th>Time In</th>
                                                                        <th>Time Out</th>
                                                                    </tr>
                                                                </tfoot>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Default ordering table end -->
                

@endsection