{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Prishe Beauty</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- ================== BEGIN core-css ================== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="{{ asset('assets/css/vendor.min.css') }} " rel="stylesheet" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
</head>

<body class='pace-top'>
    <!-- BEGIN #loader -->
    <div id="loader" class="app-loader">
        <span class="spinner"></span>
    </div>
    <!-- END #loader -->


    <!-- BEGIN #app -->
    <div id="app" class="app">
        <!-- BEGIN login -->
        <div class="login login-v2 fw-bold">
            <!-- BEGIN login-cover -->
            <div class="login-cover">
                <div class="login-cover-img" style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"
                    data-id="login-cover-image"></div>
                <div class="login-cover-bg"></div>
            </div>
            <!-- END login-cover -->

            <!-- BEGIN login-container -->
            <div class="login-container">
                <!-- BEGIN login-header -->
                <div class="login-header">
                    <div class="brand">
                        <div class="d-flex align-items-center">
                            <span class="logo"></span> <b class="me-2"> Prishe Beauty </b> Admin
                        </div>
                        {{-- <small>Bootstrap 5 Responsive Admin Template</small> --}}
                    </div>
                    <div class="icon">
                        <i class="fa fa-lock"></i>
                    </div>
                </div>
                <!-- END login-header -->

                <!-- BEGIN login-content -->
                <div class="login-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        {{-- <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div> --}}
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        <div class="form-floating mb-20px">
                            <input type="text" class="form-control fs-13px h-45px border-0" placeholder="Email"
                                name="email" id="email" required autofocus autocomplete="email" />
                            <label for="email" class="d-flex align-items-center text-gray-600 fs-13px">Email</label>
                        </div>

                        <div class="form-floating mb-20px">
                            <input type="password" name="password" class="form-control fs-13px h-45px border-0"
                                placeholder="Password" required autocomplete="current-password" />
                            <label for="password"
                                class="d-flex align-items-center text-gray-600 fs-13px">Password</label>
                        </div>
                        {{-- <div class="form-check mb-20px">
                            <input class="form-check-input border-0" type="checkbox" value="1" id="rememberMe" />
                            <label class="form-check-label fs-13px text-gray-500" for="rememberMe">
                                Remember Me
                            </label>
                        </div> --}}
                        <div class="mb-20px">
                            <button type="submit" class="btn btn-success d-block w-100 h-45px btn-lg">Sign me
                                in</button>
                        </div>
                        {{-- <div class="text-gray-500">
                            Not a member yet? Click <a href="javascript:;" class="text-white">here</a> to register.
                        </div> --}}
                    </form>
                </div>
                <!-- END login-content -->
            </div>
            <!-- END login-container -->
        </div>
        <!-- END login -->

        {{-- <!-- BEGIN login-bg -->
        <div class="login-bg-list clearfix">
            <div class="login-bg-list-item active"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-17.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-17.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-16.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-16.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-15.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-15.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-14.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-14.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-13.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-13.jpg)"></a></div>
            <div class="login-bg-list-item"><a href="javascript:;" class="login-bg-list-link"
                    data-toggle="login-change-bg" data-img="../assets/img/login-bg/login-bg-12.jpg"
                    style="background-image: url(../assets/img/login-bg/login-bg-12.jpg)"></a></div>
        </div>
        <!-- END login-bg -->

        <!-- BEGIN theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-toggle="theme-panel-expand" class="theme-collapse-btn"><i
                    class="fa fa-cog"></i></a>
            <div class="theme-panel-content" data-scrollbar="true" data-height="100%">
                <h5>App Settings</h5>

                <!-- BEGIN theme-list -->
                <div class="theme-list">
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-red"
                            data-theme-class="theme-red" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Red">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-pink"
                            data-theme-class="theme-pink" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Pink">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-orange"
                            data-theme-class="theme-orange" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Orange">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-yellow"
                            data-theme-class="theme-yellow" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Yellow">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-lime"
                            data-theme-class="theme-lime" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Lime">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-green"
                            data-theme-class="theme-green" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Green">&nbsp;</a></div>
                    <div class="theme-list-item active"><a href="javascript:;" class="theme-list-link bg-teal"
                            data-theme-class="" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Default">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-cyan"
                            data-theme-class="theme-cyan" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Cyan">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-blue"
                            data-theme-class="theme-blue" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Blue">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-purple"
                            data-theme-class="theme-purple" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Purple">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-indigo"
                            data-theme-class="theme-indigo" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Indigo">&nbsp;</a></div>
                    <div class="theme-list-item"><a href="javascript:;" class="theme-list-link bg-black"
                            data-theme-class="theme-gray-600" data-toggle="theme-selector" data-bs-toggle="tooltip"
                            data-bs-trigger="hover" data-bs-container="body" data-bs-title="Black">&nbsp;</a></div>
                </div>
                <!-- END theme-list -->

                <div class="theme-panel-divider"></div>

                <div class="row mt-10px">
                    <div class="col-8 control-label text-dark fw-bold">
                        <div>Dark Mode <span class="badge bg-primary ms-1 py-2px position-relative"
                                style="top: -1px;">NEW</span></div>
                        <div class="lh-14">
                            <small class="text-dark opacity-50">
                                Adjust the appearance to reduce glare and give your eyes a break.
                            </small>
                        </div>
                    </div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-theme-dark-mode"
                                id="appThemeDarkMode" value="1" />
                            <label class="form-check-label" for="appThemeDarkMode">&nbsp;</label>
                        </div>
                    </div>
                </div>

                <div class="theme-panel-divider"></div>

                <!-- BEGIN theme-switch -->
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-dark fw-bold">Header Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-fixed"
                                id="appHeaderFixed" value="1" checked />
                            <label class="form-check-label" for="appHeaderFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-dark fw-bold">Header Inverse</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-header-inverse"
                                id="appHeaderInverse" value="1" />
                            <label class="form-check-label" for="appHeaderInverse">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-dark fw-bold">Sidebar Fixed</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-fixed"
                                id="appSidebarFixed" value="1" checked />
                            <label class="form-check-label" for="appSidebarFixed">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-8 control-label text-dark fw-bold">Sidebar Grid</div>
                    <div class="col-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-sidebar-grid"
                                id="appSidebarGrid" value="1" />
                            <label class="form-check-label" for="appSidebarGrid">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <div class="row mt-10px align-items-center">
                    <div class="col-md-8 control-label text-dark fw-bold">Gradient Enabled</div>
                    <div class="col-md-4 d-flex">
                        <div class="form-check form-switch ms-auto mb-0">
                            <input type="checkbox" class="form-check-input" name="app-gradient-enabled"
                                id="appGradientEnabled" value="1" />
                            <label class="form-check-label" for="appGradientEnabled">&nbsp;</label>
                        </div>
                    </div>
                </div>
                <!-- END theme-switch -->

                <div class="theme-panel-divider"></div>

                <h5>Admin Design (5)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../template_html/index_v2.html" class="theme-version-link active">
                            <span style="background-image: url(../assets/img/theme/default.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_transparent/index_v2.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/transparent.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_apple/index_v2.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/apple.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_material/index_v2.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/material.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_facebook/index_v2.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/facebook.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_google/index_v2.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/google.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <h5>Language Version (7)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../template_html/index.html" class="theme-version-link active">
                            <span style="background-image: url(../assets/img/version/html.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_ajax/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/ajax.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_angularjs/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/angular1x.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_angularjs13/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/angular10x.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('Laravel Version only available in downloaded version.');"
                            class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/laravel.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_vuejs/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/vuejs.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../template_reactjs/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/reactjs.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="javascript:alert('.NET Core 3.1 MVC Version only available in downloaded version.');"
                            class="theme-version-link">
                            <span style="background-image: url(../assets/img/version/dotnet.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <h5>Frontend Design (5)</h5>
                <!-- BEGIN theme-version -->
                <div class="theme-version">
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_one_page_parallax/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/one-page-parallax.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_e_commerce/index.html"
                            class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/e-commerce.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_blog/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/blog.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_forum/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/forum.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                    <div class="theme-version-item">
                        <a href="../../../frontend/template/template_corporate/index.html" class="theme-version-link">
                            <span style="background-image: url(../assets/img/theme/corporate.jpg);"
                                class="theme-version-cover"></span>
                        </a>
                    </div>
                </div>
                <!-- END theme-version -->

                <div class="theme-panel-divider"></div>

                <a href="https://seantheme.com/color-admin/documentation/"
                    class="btn btn-dark d-block w-100 rounded-pill mb-10px" target="_blank"><b>Documentation</b></a>
                <a href="javascript:;" class="btn btn-default d-block w-100 rounded-pill"
                    data-toggle="reset-local-storage"><b>Reset Local Storage</b></a>
            </div>
        </div>
        <!-- END theme-panel --> --}}
        <!-- BEGIN scroll-top-btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top"
            data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- END scroll-top-btn -->
    </div>
    <!-- END #app -->

    <!-- ================== BEGIN core-js ================== -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- ================== END core-js ================== -->

    <!-- ================== BEGIN page-js ================== -->
    <script src="../assets/js/login-v2.demo.js"></script>
    <!-- ================== END page-js ================== -->
</body>

</html>
