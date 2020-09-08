@extends('layouts.main')

@section('content')

 <!-- [ breadcrumb ] start -->
 <div class="page-header card">
                            <div class="row align-items-end">
                                <div class="col-lg-8">
                                    <div class="page-header-title">
                                        <i class="fa fa-cogs bg-c-blue"></i>
                                        <div class="d-inline">
                                            <h5>Settings</h5>
                                            <span>Change your app name and description here!</strong></span>
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
                                                <a href="#!">Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->

    <div class="card">
        <div class="card-header">

<div class="row">
    <div class="col-sm-6">
        <h4 class="sub-title"></h4>
            <form action="{{ route('settings.store') }}" method="post">
            @csrf

                <div class="form-group row">
                <label class="col-sm-2 col-form-label">App name</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control form-txt-primary" value="{{ old('app_name', config('settings.app_name')) }}" placeholder="App name" name="app_name" id="app_name">
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-sm-2 col-form-label">App description</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control form-txt-primary" value="{{ old('app_description', config('settings.app_description')) }}" placeholder="App Description" name="app_description" id="app_description">
                        </textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Change Setting</button>
            </form>
            </div>

        </div>
    </div>
    </div>
</div>

@endsection