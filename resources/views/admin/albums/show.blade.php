@extends('layouts.admin')

@section('crumb')
<div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <div class="d-flex align-items-center">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="dashboard.html">Home</a></li>
                        <li class="breadcrumb-item"><a href="album.html">Album</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Detail Album</li>
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
        <div class="col-md-8">
            <!-- Column -->
            <div class="card">
                <img class="card-img-top" src="../assets/images/background/profile-bg.jpg" alt="Card image cap">
                <div class="card-body little-profile text-center">
                    <h3 class="mb-0">My First Album</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Unde voluptate temporibus tempora iusto officia consequatur quisquam, minima fugit quod, doloribus voluptatibus. Praesentium, totam ipsam odit sapiente quaerat a dolorum nesciunt?</p>
                    <div class="row mt-3">
                        <div class="col-md-4 col-sm-2 mt-3 mx-auto">
                            <img src="../assets/images/users/agent.jpg" class="card-img-top" alt="" style="height: 180px;">
                        </div>
                        <div class="col-md-4 col-sm-2 mt-3 mx-auto">
                            <img src="../assets/images/users/6.jpg" class="card-img-top" alt="" style="height: 180px;">
                        </div>
                        <div class="col-md-4 col-sm-2 mt-3 mx-auto">
                            <img src="../assets/images/users/3.png" class="card-img-top" alt="" style="height: 180px;">
                        </div>
                        <div class="col-md-4 col-sm-2 mt-3 mx-auto">
                            <img src="../assets/images/users/d3.jpg" class="card-img-top" alt="" style="height: 180px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Column -->
            <div class="card">
                <div class="img-thumbnail" style="background-image: linear-gradient(to right, purple, cyan); height: 150px;"></div>
                <div class="card-body little-profile text-center">
                    <div class="pro-img"><img src="../assets/images/users/4.jpg" alt="user" style="height: 125px;"></div>
                    <h3 class="">Alfa Code <span class="badge badge-pill bg-danger px-3 shadow-sm">Male</span></h3>

                    <p class="text-capitalize p-2 px-4" style="text-align: justify;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <div class="row text-center mt-3">
                        <div class="col-md-4 col-sm-4 mt-3">
                            <h3 class="mb-0 font-light">1099</h3><small>Albums</small>
                        </div>
                        <div class="col-md-4 col-sm-4 mt-3">
                            <h3 class="mb-0 font-light">23,469</h3><small>Photos</small>
                        </div>
                        <div class="col-md-4 col-sm-4 mt-3">
                            <h3 class="mb-0 font-light">23,469</h3><small>Comments</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('title', 'Admin || Album')
