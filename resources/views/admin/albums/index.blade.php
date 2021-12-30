@extends('layouts.admin')

@section('crumb')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Album</li>
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
        <!-- column -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Album</h4>
                    <div class="table-responsive mt-3">
                        <table class="table user-table table-bordered table-striped table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Thumb</th>
                                    <th class="border-top-0">Title</th>
                                    <th class="border-top-0">Photos</th>
                                    <th class="border-top-0">Owner</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="width: 15px;">1</td>
                                    <td style="width: 50px;">
                                        <img src="  images/users/7.jpg" alt="" width="80" height="50">
                                    </td>
                                    <td>Prohaska</td>
                                    <td>
                                        <span class="btn btn-cyan waves-effect waves-green"><strong>10</strong></span>
                                        Photos
                                    </td>
                                    <td>
                                        Alfa Code
                                    </td>
                                    <td style="width: 150px;">
                                        <a href="show-album.html">
                                            <i class="mdi mdi-eye me-2 text-cyan font-24"></i>
                                        </a>
                                        <form action="" method="post" class="d-inline">
                                            <button type="submit" style="border: none; outline: none; padding: 0; background: none;">
                                                <i class="mdi mdi-delete me-2 text-danger font-24"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 15px;">1</td>
                                    <td style="width: 50px;">
                                        <img src="  images/users/7.jpg" alt="" width="80" height="50">
                                    </td>
                                    <td>Prohaska</td>
                                    <td>
                                        <span class="btn btn-cyan waves-effect waves-green"><strong>10</strong></span>
                                        Photos
                                    </td>
                                    <td>
                                        Alfa Code
                                    </td>
                                    <td style="width: 150px;">
                                        <a href="show-album.html">
                                            <i class="mdi mdi-eye me-2 text-cyan font-24"></i>
                                        </a>
                                        <form action="" method="post" class="d-inline">
                                            <button type="submit" style="border: none; outline: none; padding: 0; background: none;">
                                                <i class="mdi mdi-delete me-2 text-danger font-24"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title', 'Admin || Album')
