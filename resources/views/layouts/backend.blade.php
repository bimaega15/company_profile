<!doctype html>
<html class="no-js " lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css" />
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/morrisjs/morris.min.css" />
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/sweetalert/sweetalert.css">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/css/main.css">
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/css/color_skins.css">
    <link rel="stylesheet" href="{{ asset('backend/html/') }}/assets/plugins/bootstrap-select/css/bootstrap-select.css">
    <link rel="stylesheet" href="{{ asset('library/') }}/DataTables/datatables.min.css">
    <link rel="stylesheet" href="{{ asset('library/') }}/DataTables/DataTables-1.13.6/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('library/select2-develop/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2-bootstrap-theme-master/dist/select2-bootstrap.min.css') }}">
    <link href="{{ asset('library/photoviewer-master') }}/dist/photoviewer.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('library/videojs/video-js.min.css') }}">
    <link href="{{ asset('backend/html/') }}/assets/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />
    <link href="{{ asset('backend/html/') }}/assets/plugins/nestable/jquery-nestable.css" rel="stylesheet" />

    <style>
        .photoviewer-modal {
            background-color: transparent;
            border: none;
            border-radius: 0;
            box-shadow: 0 0 6px 2px rgba(0, 0, 0, .3);
        }

        .photoviewer-header .photoviewer-toolbar {
            background-color: rgba(0, 0, 0, .5);
        }

        .photoviewer-stage {
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, .85);
            border: none;
        }

        .photoviewer-footer .photoviewer-toolbar {
            background-color: rgba(0, 0, 0, .5);
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .photoviewer-header,
        .photoviewer-footer {
            border-radius: 0;
            pointer-events: none;
        }

        .photoviewer-title {
            color: #ccc;
        }

        .photoviewer-button {
            color: #ccc;
            pointer-events: auto;
        }

        .photoviewer-header .photoviewer-button:hover,
        .photoviewer-footer .photoviewer-button:hover {
            color: white;
        }
    </style>
</head>

<body class="theme-cyan">
    <!-- Page Loader -->
    <!-- <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img class="zmdi-hc-spin" src="{{ asset('backend/html/') }}/assets/images/logo.svg" width="48" height="48" alt="Compass"></div>
            <p>Please wait...</p>
        </div>
    </div> -->
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

    <x-modal.modal-small />
    <x-modal.modal-medium />
    <x-modal.modal-large />
    <x-modal.modal-extra-large />


    <!-- Jquery Core Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

    <script src="{{ asset('backend/html/') }}/assets/bundles/morrisscripts.bundle.js"></script>
    <!-- Morris Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/jvectormap.bundle.js"></script>
    <!-- JVectorMap Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
    <script src="{{ asset('backend/html/') }}/assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

    <script src="{{ asset('backend/html/') }}/assets/bundles/mainscripts.bundle.js"></script>
    <script src="{{ asset('backend/html/') }}/assets/plugins/sweetalert/sweetalert.min.js"></script>
    <script src="{{ asset('library/') }}/DataTables/datatables.min.js"></script>
    <script src="{{ asset('library/') }}/DataTables/DataTables-1.13.6/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="{{ asset('backend/html/') }}/assets/js/pages/index.js"></script>
    <script src="{{ asset('library/select2-develop/dist/js/select2.min.js') }}"></script>
    <script src="{{ asset('library/photoviewer-master') }}/dist/photoviewer.js"></script>
    <script src="{{ asset('backend/html/assets/plugins/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('library/jquery-emoji-ratings-master/dist/jquery.emojiRatings.min.js') }}"></script>
    <script src="{{ asset('library/videojs/video.min.js') }}"></script>
    <script src="{{ asset('library/autonumeric/autoNumeric.min.js') }}"></script>
    <script src="{{ asset('backend/html/') }}/assets/plugins/momentjs/moment.js"></script>
    <script src="{{ asset('backend/html/') }}/assets/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>
    <script src="{{ asset('backend/html/') }}/assets/plugins/nestable/jquery.nestable.js"></script>
    <script src="{{ asset('backend/html/') }}/assets/js/pages/ui/sortable-nestable.js"></script>


    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>

    @stack('custom_js')
</body>

</html>