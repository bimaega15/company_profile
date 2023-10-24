<head>
    <title>{{ UtilsHelp::settingApp()->nama_settings }}</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/') }}/vendors/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/') }}/vendors/images/32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/') }}/vendors/images/16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/') }}/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/') }}/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontend/') }}/vendors/styles/style.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>
</head>

<body class="login-page">
    <div class="login-header box-shadow">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <div class="brand-logo">
                <a href="">
                    <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                        alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="width: 110px;"></noscript>
                </a>
            </div>
            <div class="login-menu">
                <ul>

                    {{-- <li><a href="register.html" style="font-size: 13px; color: #fff;">
                        Website</a> --}}
                </ul>
            </div>
        </div>
    </div>
    <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-7">
                    <img src="{{ asset('frontend') }}/vendors/images/login-page-img.png" alt="">
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="login-box bg-white box-shadow border-radius-10">
                        <div class="login-title">
                            <h2 class="text-center text-primary" style="font-size: 18px;">Login to System</h2>
                        </div>
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <div class="select-role">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn" style="background-color: #F3F2FF; border-color: #cecaff;">
                                        <input type="radio" name="options" id="user">
                                        <div class="icon"><img
                                                src="{{ asset('frontend') }}/vendors/images/person.svg" class="svg"
                                                alt=""></div>
                                        <span>I'm</span>
                                        Employee
                                    </label>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input class="form-control form-control-lg" type="text" name="email"
                                    placeholder="Email" autocomplete="off" style="font-size: 16px; height: 47px;">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                                </div>
                            </div>
                            <div class="input-group custom">
                                <input class="form-control form-control-lg" type="password" name="password"
                                    placeholder="Password" autocomplete="off" style="font-size: 16px; height: 47px;">
                                <div class="input-group-append custom">
                                    <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                                </div>
                            </div>
                            <div class="row pb-30">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1"
                                            style="font-size: 16px;">Remember</label>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-0">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block"
                                            style="font-size: 16px">Login</button>
                                    </div>

                                </div>
                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('frontend') }}/vendors/scripts/core.js"></script>
<script src="{{ asset('frontend') }}/vendors/scripts/script.min.js"></script>
<script src="{{ asset('frontend') }}/vendors/scripts/process.js"></script>
<script src="{{ asset('frontend') }}/vendors/scripts/layout-settings.js"></script>
