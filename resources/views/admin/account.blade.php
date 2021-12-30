@extends('layouts.admin')

@section('crumb')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Account</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-md-6">
                <div class="card py-2">
                    <div class="card-body profile-card py-5">
                        <center class="mt-4 mb-4">
                            <img src="{{ Auth::user()->image == null ? asset('images/users/1.png') : asset(Auth::user()->image) }}"
                                class="rounded-circle" width="150">
                            <h4 class="card-title mt-3">{{ Auth::user()->name }}</h4>
                            <span
                                class="badge badge-pill bg-orange p-2 px-3 text-capitalize">{{ Auth::user()->username }}</span>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="form-horizontal form-material mx-2" enctype="multipart/form-data" method="POST"
                            action="{{ route('admin.profile.update', Auth::user()->username) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Full Name" class="form-control ps-0 form-control-line"
                                        value="{{ Auth::user()->name }}" name="name">
                                    @error('name')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Username</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Username" class="form-control ps-0 form-control-line"
                                        name="username" id="example-email" value="{{ Auth::user()->username }}">
                                    @error('username')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control ps-0 form-control-line"
                                        placeholder="Password" name="password" value="">
                                    @error('password')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Image</label>
                                <div class="col-sm-12 border-bottom">
                                    <input type="file" name="image" id="image" class="form-control ps-0 form-control-line">
                                    @error('image')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                        Admin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin | Profile')
