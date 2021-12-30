@extends('layouts.admin')

@section('crumb')
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User</li>
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
                        <h4 class="card-title">Data User</h4>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="table-responsive mt-3">
                            <table class="table user-table table-bordered table-striped table-hover">
                                <thead class="text-center">
                                    <tr>
                                        <th class="border-top-0">#</th>
                                        <th class="border-top-0">Image</th>
                                        <th class="border-top-0">Name</th>
                                        <th class="border-top-0">Username</th>
                                        <th class="border-top-0">Gender</th>
                                        <th class="border-top-0">Verified At</th>
                                        <th class="border-top-0">Action</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($members as $member)
                                        <tr>
                                            <td style="width: 15px;">{{ $loop->iteration }}</td>
                                            <td style="width: 50px;">
                                                <img src="{{ $member->image == null ? asset('images/users/1.png') : asset($member->image) }}"
                                                    alt="" width="50" height="50" class="rounded-circle">
                                            </td>
                                            <td>{{ $member->name }}</td>
                                            <td>{{ $member->username }}</td>
                                            <td>{{ $member->gender }}</td>
                                            <td>
                                                <span class="badge badge-pill bg-primary">
                                                    {{ $member->verified_at }}
                                                </span>
                                            </td>
                                            <td style="width: 150px;">
                                                <a href="{{ route('admin.member.show', $member->username) }}">
                                                    <i class="mdi mdi-pencil-circle me-2 text-warning font-24"></i>
                                                </a>
                                                <form action="{{ route('admin.member.delete', $member->id) }}"
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
@section('title', 'Admin || User')
