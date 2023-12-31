<!-- BEGIN #header -->
@if (Auth::check())
    <div id="header" class="app-header">
        <!-- BEGIN navbar-header -->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Prishe</b> Beauty</a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- END navbar-header -->

        <!-- BEGIN header-nav -->
        <div class="navbar-nav">
            <div class="navbar-item navbar-form">
                <form action="" method="POST" name="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter keyword" />
                        <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="navbar-item dropdown">
                <a href="#" data-bs-toggle="dropdown" class="navbar-link dropdown-toggle fs-14px">
                    <i class="fa fa-bell"></i>
                    <span class="badge">0</span>
                </a>
                <div class="dropdown-menu media-list dropdown-menu-end">
                    <div class="dropdown-header">NOTIFICATIONS (0)</div>
                    <div class="text-center w-300px py-3">
                        No notification found
                    </div>
                </div>
            </div>

            <div class="navbar-item navbar-user dropdown">
                <a href="#" class="navbar-link dropdown-toggle d-flex align-items-center"
                    data-bs-toggle="dropdown">
                    <div class="image image-icon bg-gray-800 text-gray-600">
                        <i class="fa fa-user"></i>
                    </div>
                    <span class="d-none d-md-inline">{{ Auth::user()->name }}</span> <b class="caret ms-10px"></b>
                </a>
                <div class="dropdown-menu dropdown-menu-end me-1">
                    <a href="javascript:;" class="dropdown-item">Edit Profile</a>
                    <a href="javascript:;" class="dropdown-item d-flex align-items-center">
                        Inbox
                        <span class="badge bg-danger rounded-pill ms-auto pb-4px">2</span>
                    </a>
                    <a href="javascript:;" class="dropdown-item">Calendar</a>
                    <a href="javascript:;" class="dropdown-item">Setting</a>
                    <div class="dropdown-divider"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                     this.closest('form').submit();"
                            class="dropdown-item">{{ __('Log Out') }}</a>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <!-- END header-nav -->
    </div>
@endif
<!-- END #header -->
