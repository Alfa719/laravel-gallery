<header class="topbar" data-navbarbg="skin6">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header" data-logobg="skin6">
            <a class="navbar-brand ms-4" href="dashboard.html">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <i class="mdi mdi-folder-multiple-image font-24 me-3 text-orange"></i>
                </b>
                <span class="logo-text">
                    <strong class="text-white font-22 font-bold font-monospace">Alfa Gallery</strong>
                </span>
            </a>
            <a class="nav-toggler waves-effect waves-light text-white d-block d-md-none" href="javascript:void(0)"><i
                    class="ti-menu ti-close"></i></a>
        </div>
        <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
            <ul class="navbar-nav d-lg-none d-md-block ">
                <li class="nav-item">
                    <a class="nav-toggler nav-link waves-effect waves-light text-white " href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav me-auto mt-md-0 ">
                <li class="nav-item search-box">
                    <a class="nav-link text-muted" href="javascript:void(0)"><i class="ti-search"></i></a>
                    <form class="app-search" style="display: none;">
                        <input type="text" class="form-control font-monospace font-bold" placeholder="Search >> Enter">
                        <a class="srh-btn">
                            <i class="ti-close"></i>
                        </a>
                    </form>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="#" id="navbarDropdown"
                        role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ Auth::user()->image == null ? asset('images/users/1.png') : asset(Auth::user()->image) }}"
                            alt="user" class="profile-pic me-3"><span class="font-monospace">Alfa
                            Code</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="dropdown-item">
                            <a href="{{ route('admin.profile.index') }}" class="font-17 text-dark font-monospace"><i
                                    class="mdi me-3 mdi-account-convert font-bold text-cyan font-18"></i>Profile</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="{{ route('admin.member.verify') }}" class="font-17 text-dark font-monospace"><i
                                    class="mdi me-3 mdi-alert-box font-bold text-purple font-18"></i>Notification</a>
                        </li>
                        <li class="dropdown-item">
                            <a href="" class="font-17 text-dark font-monospace"><i
                                    class="mdi me-3 mdi-logout-variant font-bold text-danger font-18"></i>Sign Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
