<!doctype html>
<html lang="zxx">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/animate.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/flaticon.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/odometer.min.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/style.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/dark.css">

    <link rel="stylesheet" href="{{ asset('frontend/') }}/assets/css/responsive.css">

    <link rel="icon" type="image/png" href="{{ asset('frontend/') }}/assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('library/toastr/toastr.min.css') }}">

    <title>{{ UtilsHelp::settingApp()->nama_settings }}</title>
</head>

<body>

    <x-frontend.partials.preloader></x-frontend.partials.preloader>

    <x-frontend.partials.header></x-frontend.partials.header>

    <div style="position: fixed; width: 100%; height: 100%; z-index: 99999; background-color: #b9b4b44a; display: flex; justify-content: center; align-items: center;" class="loading-svg d-none">
        <img src="{{ asset('upload/assets/loading.svg') }}" alt="loading">
    </div>
    
    {{$slot}}

    <x-frontend.partials.footer></x-frontend.partials.footer>

    <x-frontend.partials.copyright></x-frontend.partials.copyright>

    <x-frontend.partials.goto></x-frontend.partials.goto>



    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{ asset('frontend/') }}/assets/js/jquery.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/meanmenu.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/wow.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/nice-select.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/magnific-popup.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/jarallax.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/appear.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/odometer.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/smoothscroll.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/form-validator.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/contact-form-script.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/ajaxchimp.min.js"></script>

    <script src="{{ asset('frontend/') }}/assets/js/custom.js"></script>

    <script src="{{ asset('library/toastr/toastr.min.js') }}"></script>

    @stack('custom_js')

</body>

</html>