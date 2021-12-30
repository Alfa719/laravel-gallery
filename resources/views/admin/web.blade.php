@extends('layouts.admin')

@section('crumb')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Web Setting</li>
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
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body profile-card">
                        @if (session('background'))
                            <div class="alert alert-success" role="alert">
                                {{ session('background') }}
                            </div>
                        @endif
                        <center class="mt-4 mb-4">
                            <img src="{{ url($web->cover_image) }}" class="img-thumbnail shadow-lg" width="500" />
                            <h4 class="card-title mt-3">Change Background</h4>
                            <form action="{{ route('admin.web.updateBackground', $web->id) }}" method="post"
                                class="form-horizontal form-material" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-3 col-sm-12 border-bottom">
                                        <input type="file" name="cover_image" id="image"
                                            class="form-control ps-0 form-control-line">
                                        @error('cover_image')
                                            <small class="text-danger">
                                                {{ $message }}
                                            </small>
                                        @enderror
                                    </div>
                                </div>
                                <button type="submit"
                                    class="btn btn-outline-cyan waves-effect waves-green p-2 px-3 text-capitalize">Submit</button>
                            </form>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center my-2">About Website</h2>
                        <form class="form-horizontal form-material mx-2" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Website Name"
                                        class="form-control ps-0 form-control-line" name="website_name"
                                        value="{{ $web->website_name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="example-email" class="col-md-12">Album Pagination</label>
                                <div class="col-md-12">
                                    <input type="number" placeholder="Album Pagination"
                                        class="form-control ps-0 form-control-line" name="album_pagination"
                                        id="example-email" value="{{ $web->album_pagination }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">About Website</label><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 border-bottom">
                                        <input type="file" name="about_thumbnail_image" id="image"
                                            class="form-control ps-0 form-control-line">
                                        <strong><small class="text-cyan font-bold">About Thumbnail *</small></strong>
                                        <img src="{{ url($web->about_thumbnail_image) }}" class="img-thumbnail shadow-lg"
                                            width="300" />
                                    </div>
                                    <div class="col-md-6">
                                        <textarea rows="10" class="form-control ps-0 form-control-line"
                                            placeholder="About Website" name="about">{{ $web->about_website }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Contact Website</label><br>
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 border-bottom">
                                        <input type="email" name="email" id="email"
                                            class="form-control ps-0 form-control-line" placeholder="Email Website"
                                            value="{{ $web->email }}"><br>
                                        <input type="number" name="phone" id="phone"
                                            class="form-control ps-0 form-control-line" placeholder="Phone Website"
                                            value="{{ $web->phone }}"><br>
                                        <input type="text" name="github" id="github"
                                            class="form-control ps-0 form-control-line" placeholder="Github Owner"
                                            value="{{ $web->github }}"><br>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="facebook" id="facebook"
                                            class="form-control ps-0 form-control-line" placeholder="Facebook Website"
                                            value="{{ $web->facebook == null ? '' : $web->facebook }}"><br>
                                        <input type="text" name="instagram" id="instagram"
                                            class="form-control ps-0 form-control-line" placeholder="Instagram Website"
                                            value="{{ $web->instagram == null ? '' : $web->instagram }}"><br>
                                        <textarea rows="3" class="form-control ps-0 form-control-line"
                                            placeholder="Address Website" name="Addres">{{ $web->address }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12 mb-0">Footer Website</label><br>
                                <div class="row">
                                    <div class="col-md-12">
                                        <textarea rows="5" class="form-control ps-0 form-control-line"
                                            placeholder="Footer Website"
                                            name="footer_content">{{ $web->footer_content }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12 d-flex">
                                    <button class="btn btn-success mx-auto mx-md-0 text-white">Update
                                        Website</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin | Web Setting')
