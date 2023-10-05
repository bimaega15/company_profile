<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <title>:: Compass Bootstrap4 Admin ::</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/css/color_skins.css">
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('backend/html/') }}/assets/images/logo.svg" width="48" height="48" alt="Compass"></div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>

    <!-- Top Bar -->
   <x-navbar></x-navbar>

    <!-- Left Sidebar -->
   <x-sidebar></x-sidebar>

    <!-- Right Sidebar -->
    <x-right-sidebar></x-right-sidebar>

    <!-- Chat-launcher -->
    <x-chat></x-chat>

    <!-- Main Content -->
    {{$slot}}

    
    <!-- Jquery Core Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('backend/html/') }}/assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

    <script src="{{ asset('backend/html/') }}/assets/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('backend/html/') }}/assets/js/pages/index.js"></script>
</body>

</html>