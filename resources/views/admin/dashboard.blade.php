@extends('layouts.admin')

@section('crumb')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="page-breadcrumb">
        <div class="row align-items-center">
            <div class="col-md-6 col-8 align-self-center">
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="d-flex flex-wrap align-items-center">
                                    <div>
                                        <h3 class="card-title">Visitors Statistic / Month</h3>
                                        <h6 class="card-subtitle">Last Update</h6>
                                    </div>
                                    <div class="ms-lg-auto mx-sm-auto mx-lg-0">
                                        <ul class="list-inline d-flex">
                                            <li class="me-4">
                                                <h6 class="text-success">
                                                    <i class="fa fa-circle font-10 me-2 "></i>Ample
                                                </h6>
                                            </li>
                                            <li>
                                                <h6 class="text-info">
                                                    <i class="fa fa-circle font-10 me-2"></i>Pixel
                                                </h6>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="amp-pxl" style="height: 360px;">
                                    <div class="chartist-tooltip"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-xlg-3">
                <!-- Column -->
                <div class="card shadow-sm">
                    <div class="card-header text-md-center bg-purple">
                        <h3 class="text-white">Albums</h3>
                    </div>
                    <div class="card-body little-profile text-center">
                        <h1 class="mb-0 position-absolute"><i class="mdi mdi-image-album text-danger"></i></h1>
                        <h1 class="mb-0">20</h1>
                    </div>
                    <div class="card-footer text-end text-capitalize shadow-lg">
                        <h4 class="mb-0">Total Albums</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xlg-3">
                <!-- Column -->
                <div class="card shadow-sm">
                    <div class="card-header text-md-center bg-purple">
                        <h3 class="text-white">Members</h3>
                    </div>
                    <div class="card-body little-profile text-center">
                        <h1 class="mb-0 position-absolute"><i class="mdi mdi-account-box text-orange"></i></h1>
                        <h1 class="mb-0">20</h1>
                    </div>
                    <div class="card-footer text-end text-capitalize shadow-lg">
                        <h4 class="mb-0">Total Members</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xlg-3">
                <!-- Column -->
                <div class="card shadow-sm">
                    <div class="card-header text-md-center bg-purple">
                        <h3 class="text-white">Photos</h3>
                    </div>
                    <div class="card-body little-profile text-center">
                        <h1 class="mb-0 position-absolute"><i class="mdi mdi-image-filter text-purple"></i></h1>
                        <h1 class="mb-0">20</h1>
                    </div>
                    <div class="card-footer text-end text-capitalize shadow-lg">
                        <h4 class="mb-0">Total Photos</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xlg-3">
                <!-- Column -->
                <div class="card shadow-sm">
                    <div class="card-header text-md-center bg-purple">
                        <h3 class="text-white">Non-Veriify</h3>
                    </div>
                    <div class="card-body little-profile text-center">
                        <h1 class="mb-0 position-absolute"><i class="mdi mdi-account-alert text-cyan"></i></h1>
                        <h1 class="mb-0">20</h1>
                    </div>
                    <div class="card-footer text-end text-capitalize shadow-lg">
                        <h4 class="mb-0">Total Non-Verify</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 col-xlg-9">
                <div class="card">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs profile-tab" role="tablist">
                        <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#admin-activity"
                                role="tab">Log Admin</a>
                        </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#user-activity"
                                role="tab">Log User</a> </li>
                        <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#log-album"
                                role="tab">Log Album</a>
                        </li>
                    </ul>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div class="tab-pane active" id="admin-activity" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline border-start-0">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <!--second tab-->
                        <div class="tab-pane" id="user-activity" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline border-start-0">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="log-album" role="tabpanel">
                            <div class="card-body">
                                <div class="profiletimeline border-start-0">
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="sl-item">
                                        <div class="sl-left"> <img src="  images/users/3.jpg" alt="user"
                                                class="img-circle"> </div>
                                        <div class="sl-right">
                                            <div><a href="#" class="link">John Doe</a> <span
                                                    class="sl-date">5
                                                    minutes ago</span>
                                                <p class="mt-2"> Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('title', 'Admin || Dashboard')
