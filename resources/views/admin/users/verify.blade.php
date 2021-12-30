@extends('layouts.admin')

@section('crumb')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Verification</li>
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
                        <h4 class="card-title">Data Register</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if (session('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="table-responsive mt-3">
                            <table class="table user-table table-bordered table-striped table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Username</th>
                                        <th class="border-top-0">Gender</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($users as $user)
                                        <tr>
                                            <td style="width: 15px;">{{ $loop->iteration }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->username }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td style="width: 150px;">
                                                <form action="{{ route('admin.member.verify.post', $user->id) }}"
                                                    method="post" class="d-inline">
                                                    @method('POST')
                                                    @csrf
                                                    <button type="submit"
                                                        style="border: none; outline: none; padding: 0; background: none;">
                                                        <i class="mdi mdi-verified me-2 text-cyan font-24"></i>
                                                    </button>
                                                </form>
                                                <form action="{{ route('admin.member.verify.delete', $user->id) }}"
                                                    method="post" class="d-inline">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit"
                                                        style="border: none; outline: none; padding: 0; background: none;">
                                                        <i class="mdi mdi-delete me-2 text-danger font-24"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin || User Verification')
