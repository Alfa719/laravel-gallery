@extends('layouts.admin')

@section('crumb')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Comment</li>
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
                    <h4 class="card-title">Data Comment</h4>
                    <div class="table-responsive mt-3">
                        <table class="table user-table table-bordered table-striped table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th class="border-top-0">#</th>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Username</th>
                                    <th class="border-top-0">Album</th>
                                    <th class="border-top-0">Owner</th>
                                    <th class="border-top-0">Comment</th>
                                    <th class="border-top-0">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td style="width: 15px;">1</td>
                                    <td>Alfa Code</td>
                                    <td>Alfa11</td>
                                    <td style="width: 50px;">
                                        <img src="images/users/7.jpg" alt="" width="80" height="50">
                                    </td>
                                    <td>Didik</td>
                                    <td style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel repellat ratione aliquam architecto dolores obcaecati ad laboriosam id quo facilis!</td>
                                    <td style="width: 50px;">
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
@section('title', 'Admin || Comment')
