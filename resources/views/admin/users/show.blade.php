@extends('layouts.admin')

@section('crumb')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.member.index') }}">User</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About User</li>
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
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body profile-card">
                        <center class="mt-4">
                            <img src="{{ $member->image == null ? asset('images/users/1.png') : asset($member->image) }}"
                                class="rounded-circle" width="250" height="250">
                            <h4 class="card-title mt-2">{{ $member->name }}</h4>
                            <h6 class="card-subtitle">
                                {{ $member->status == null ? 'You Dont Have Status Yet' : $member->status }}
                            </h6>
                            <div class="row text-center justify-content-center">
                                <div class="col-4">
                                    <i class="mdi mdi-image-album" aria-hidden="true"></i>
                                    <span class="value-digit">254</span>
                                </div>
                                <div class="col-4">
                                    <i class="icon-picture" aria-hidden="true"></i>
                                    <span class="value-digit">254</span>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('admin.member.update', $member->username) }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Full Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Full Name" class="form-control ps-0 form-control-line"
                                        value="{{ $member->name }}" name="name">
                                </div>
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Gender</label>
                                <div class="col-md-12">
                                    <input type="radio" name="gender" class="me-2" id="gender" value="Male"
                                        {{ $member->gender == 'Male' ? 'checked' : '' }}><span
                                        class="me-2">Male</span>
                                    <input type="radio" name="gender" class="me-2" id="gender" value="Female"
                                        {{ $member->gender == 'Female' ? 'checked' : '' }}><span
                                        class="me-2">Female</span>
                                    <input type="radio" name="gender" class="me-2" id="gender" value="Unknown"
                                        {{ $member->gender == 'Unknown' ? 'checked' : '' }}><span
                                        class="me-2">Unknown</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Username</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Username" class="form-control ps-0 form-control-line"
                                        name="username" id="example-email" value="{{ $member->username }}">
                                </div>
                                @error('username')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">New Password</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control ps-0 form-control-line"
                                        placeholder="Password" name="password">
                                    <small class="text-info font-bold">Set Empty If U Dont Want to Update Your
                                        Password</small>
                                </div>
                                @error('password')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Phone Number</label>
                                <div class="col-md-12">
                                    <input type="text" name="phone" placeholder="Phone Number"
                                        class="form-control ps-0 form-control-line" value="{{ $member->phone }}">
                                </div>
                                @error('phone')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Status</label>
                                <div class="col-md-12">
                                    <textarea rows="3" class="form-control ps-0 form-control-line"
                                        name="status">{{ $member->status }}</textarea>
                                </div>
                                @error('status')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Address</label>
                                <div class="col-md-12">
                                    <textarea rows="3" class="form-control ps-0 form-control-line"
                                        name="address">{{ $member->address }}</textarea>
                                </div>
                                @error('address')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Select Image</label>
                                <div class="col-sm-12 border-bottom">
                                    <input type="file" name="image" id="image" class="form-control ps-0 form-control-line">
                                    <small class="text-info font-bold">Set Empty If U Dont Want to Update Your
                                        Image</small>
                                </div>
                                @error('image')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                            <input type="submit" value="Update User" class="btn btn-outline-orange">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin | User')
