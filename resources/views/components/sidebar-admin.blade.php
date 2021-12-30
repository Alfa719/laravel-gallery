<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- User Profile-->
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{ route('admin.dashboard') }}"
                        aria-expanded="false">
                        <i class="mdi me-2 mdi-gauge"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.album.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-image-album"></i>
                        <span class="hide-menu">Albums</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.member.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-box"></i>
                        <span class="hide-menu">Users</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.member.verify') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-check"></i>
                        <span class="hide-menu">User Verification</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.comment.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-comment-text-outline"></i>
                        <span class="hide-menu">Comments</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.web.index', 1) }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-cellphone-link"></i>
                        <span class="hide-menu">Web Layout</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link waves-effect waves-dark sidebar-link"
                        href="{{ route('admin.profile.index') }}" aria-expanded="false">
                        <i class="mdi me-2 mdi-account-settings-variant"></i>
                        <span class="hide-menu">Account</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <form action="{{ route('logout') }}" method="post" class="d-inline">
                        @csrf
                        <button type="submit" class="sidebar-link waves-effect waves-dark sidebar-link"
                            style="background: transparent; outline:none; border:none">
                            <i class="mdi me-2 mdi-power"></i>
                            <span class="hide-menu">Log Out</span>
                        </button>
                    </form>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
</aside>
