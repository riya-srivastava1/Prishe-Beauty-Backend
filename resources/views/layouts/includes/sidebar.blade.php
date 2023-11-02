<div id="sidebar" class="app-sidebar">
    <!-- BEGIN scrollbar -->
    <div class="app-sidebar-content" data-scrollbar="true" data-height="100%">
        <!-- BEGIN menu -->
        <div class="menu">
            <div class="menu-profile">
                <a href="javascript:;" class="menu-profile-link" data-toggle="app-sidebar-profile"
                    data-target="#appSidebarProfileMenu">
                    <div class="menu-profile-cover with-shadow"></div>
                    <div class="menu-profile-image menu-profile-image-icon bg-gray-900 text-gray-600">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="menu-profile-info">
                        <div class="d-flex align-items-center">
                            <div class="flex-grow-1">
                                {{ Auth::user()->name }}
                            </div>
                            {{-- <div class="menu-caret ms-auto"></div> --}}
                        </div>
                        {{-- <small>Front end developer</small> --}}
                    </div>
                </a>
            </div>
            {{-- <div id="appSidebarProfileMenu" class="collapse">
                <div class="menu-item pt-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-cog"></i></div>
                        <div class="menu-text">Settings</div>
                    </a>
                </div>
                <div class="menu-item">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-pencil-alt"></i></div>
                        <div class="menu-text"> Send Feedback</div>
                    </a>
                </div>
                <div class="menu-item pb-5px">
                    <a href="javascript:;" class="menu-link">
                        <div class="menu-icon"><i class="fa fa-question-circle"></i></div>
                        <div class="menu-text"> Helps</div>
                    </a>
                </div>
                <div class="menu-divider m-0"></div>
            </div> --}}
            <div class="menu-header">Navigation</div>
            <div class="menu-item {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-dashboard"></i>
                    </div>
                    <div class="menu-text">Dashboard</div>
                </a>
            </div>
            <div class="menu-item {{ Route::currentRouteName() == 'contact.us.index' ? 'active' : '' }}">
                <a href="{{ route('contact.us.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fas fa-user-pen"></i>
                    </div>
                    <div class="menu-text">Contact Us</div>
                </a>
            </div>

            {{-- Oreder --}}
            <div class="menu-item {{ Route::currentRouteName() == 'orders.index' ? 'active' : '' }}">
                <a href="{{ route('orders.index') }}" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-shopping-cart"></i>
                    </div>
                    <div class="menu-text">Orders</div>
                </a>
            </div>
            {{-- !! Order --}}

            {{-- <div class="menu-item has-sub">
                <a href="javascript:;" class="menu-link">
                    <div class="menu-icon">
                        <i class="fa fa-align-left"></i>
                    </div>
                    <div class="menu-text">Menu Level</div>
                    <div class="menu-caret"></div>
                </a>
                <div class="menu-submenu">
                    <div class="menu-item has-sub">
                        <a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.1</div>
                            <div class="menu-caret"></div>
                        </a>
                        <div class="menu-submenu">
                            <div class="menu-item has-sub">
                                <a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.1</div>
                                    <div class="menu-caret"></div>
                                </a>
                                <div class="menu-submenu">
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.1</div>
                                        </a></div>
                                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                                            <div class="menu-text">Menu 3.2</div>
                                        </a></div>
                                </div>
                            </div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.2</div>
                                </a></div>
                            <div class="menu-item"><a href="javascript:;" class="menu-link">
                                    <div class="menu-text">Menu 2.3</div>
                                </a></div>
                        </div>
                    </div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.2</div>
                        </a></div>
                    <div class="menu-item"><a href="javascript:;" class="menu-link">
                            <div class="menu-text">Menu 1.3</div>
                        </a></div>
                </div>
            </div> --}}

            <!-- BEGIN minify-button -->
            <div class="menu-item d-flex">
                <a href="javascript:;" class="app-sidebar-minify-btn ms-auto" data-toggle="app-sidebar-minify"><i
                        class="fa fa-angle-double-left"></i></a>
            </div>
            <!-- END minify-button -->

        </div>
        <!-- END menu -->
    </div>
    <!-- END scrollbar -->
</div>
<div class="app-sidebar-bg"></div>
<div class="app-sidebar-mobile-backdrop"><a href="#" data-dismiss="app-sidebar-mobile" class="stretched-link"></a>
</div>
