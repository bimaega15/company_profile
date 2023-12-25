<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ UtilsHelp::settingApp()->nama_settings }}</title>
    <meta content="" name="Freight Forwarding, Iso Tank, Flexi Tank and Inland Chemical Distribution Service">

    <meta content="Freight Forwarding, Iso Tank, Flexi Tank and Inland Chemical Distribution Service"
        name="PT Megaduta Artha Megah is an Indonesian private owned company, established in Jakarta - 
        Indonesia on March 2009 focusing in liquid transportation using ISO-Tank and Flexibag. 
        PT Megaduta Artha Megah are committed to extend our global reach and business expansion to provide a total logistic solution. 
        One of our latest expansions are LCL and Pack delivery. We combine excellent operation system with safety objectives as our step of commitment.">
    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/owl.carousel.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/animate.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/boxicons.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/magnific-popup.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/flaticon.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/meanmenu.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/nice-select.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/odometer.min.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/style.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/dark.css">

    <link rel="stylesheet" href="{{ asset('frontend') }}/assets/css/responsive.css">
    {{-- 
    <link rel="icon" type="image/png" href="{{ asset('frontend') }}/assets/img/favicon.png"> --}}

    <link rel="stylesheet" href="{{ asset('library/toastr/toastr.min.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/select2-bootstrap-5-theme@1.3.0/dist/select2-bootstrap-5-theme.min.css" />

    <link rel="shortcut icon" href="{{ asset('frontend') }}/assets/img/favicon.png">
    @stack('custom_css')
</head>
<style>
    /* CSS Multiple Whatsapp Chat by Maks Miliyan*/

    #whatsapp-chat {
        position: fixed;
        background: #fff;
        width: 350px;
        border-radius: 10px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, .28);
        bottom: 90px;
        right: 30px;
        overflow: hidden;
        z-index: 99;
        animation-name: showchat;
        animation-duration: 1s;
        transform: scale(1)
    }

    a.blantershow-chat {
        background: linear-gradient(to right top, #6f96f3, #164ed2);
        color: #fff;
        position: fixed;
        z-index: 98;
        bottom: 25px;
        right: 30px;
        font-size: 15px;
        padding: 10px 20px;
        border-radius: 30px;
        box-shadow: 0 1px 15px rgba(32, 33, 36, .28)
    }

    a.blantershow-chat i {
        transform: scale(1.2);
        margin: 0 10px 0 0
    }

    .header-chat {
        background: linear-gradient(to right top, #6f96f3, #164ed2);
        color: #fff;
        padding: 20px
    }

    .header-chat h3 {
        margin: 0 0 10px
    }

    .header-chat p {
        font-size: 14px;
        line-height: 1.7;
        margin: 0
    }

    .info-avatar {
        position: relative
    }

    .info-avatar img {
        border-radius: 100%;
        width: 50px;
        float: left;
        margin: 0 10px 0 0
    }

    .info-avatar:before {
        content: '\f232';
        z-index: 1;
        font-family: "Font Awesome 5 Brands";
        background: #23ab23;
        color: #fff;
        padding: 0px 5px;
        border-radius: 100%;
        position: absolute;
        top: 30px;
        left: 30px
    }

    a.informasi {
        padding: 20px;
        display: block;
        overflow: hidden;
        animation-name: showhide;
        animation-duration: 2.5s
    }

    a.informasi:hover {
        background: #f1f1f1
    }

    .info-chat span {
        display: block
    }

    #get-label,
    span.chat-label {
        font-size: 12px;
        color: #888
    }

    #get-nama,
    span.chat-nama {
        margin: 5px 0 0;
        font-size: 15px;
        font-weight: 700;
        color: #222
    }

    #get-label,
    #get-nama {
        color: #fff
    }

    span.my-number {
        display: none
    }

    .blanter-msg {
        color: #444;
        padding: 20px;
        font-size: 12.5px;
        text-align: center;
        border-top: 1px solid #ddd
    }

    textarea#chat-input {
        border: none;
        font-family: 'Arial', sans-serif;
        width: 100%;
        /* height: 20px; */
        outline: none;
        resize: none
    }

    a#send-it {
        color: #555;
        width: 40px;
        margin: -5px 0 0 5px;
        font-weight: 700;
        padding: 8px;
        background: #eee;
        border-radius: 10px
    }

    .first-msg {
        background: #f5f5f5;
        padding: 30px;
        text-align: center
    }

    .first-msg span {
        background: #e2e2e2;
        color: #333;
        font-size: 14.2px;
        line-height: 1.7;
        border-radius: 10px;
        padding: 15px 20px;
        display: inline-block
    }

    .start-chat .blanter-msg {
        display: flex
    }

    #get-number {
        display: none
    }

    a.close-chat {
        position: absolute;
        top: 5px;
        right: 15px;
        color: #fff;
        font-size: 30px
    }

    @keyframes showhide {
        from {
            transform: scale(.5);
            opacity: 0
        }
    }

    @keyframes showchat {
        from {
            transform: scale(0);
            opacity: 0
        }
    }

    @media screen and (max-width:480px) {
        #whatsapp-chat {
            width: auto;
            left: 5%;
            right: 5%;
            font-size: 80%
        }
    }

    .hide {
        display: none;
        animation-name: showhide;
        animation-duration: 1.5s;
        transform: scale(1);
        opacity: 1
    }

    .show {
        display: block;
        animation-name: showhide;
        animation-duration: 1.5s;
        transform: scale(1);
        opacity: 1
    }
</style>

<body>

    <x-frontend.partials.preloader></x-frontend.partials.preloader>
    {{-- <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div> --}}
    <x-frontend.partials.header></x-frontend.partials.header>

    <div style="position: fixed; width: 100%; height: 100%; z-index: 99999; background-color: #b9b4b44a; display: flex; justify-content: center; align-items: center;"
        class="loading-svg d-none">
        <img src="{{ asset('upload/assets/loading.svg') }}" alt="loading">
    </div>


    <link href='https://use.fontawesome.com/releases/v5.8.2/css/all.css' rel='stylesheet' type='text/css' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <div id='whatsapp-chat' class='hide'>
        <div class='header-chat'>
            <div class='head-home'>
                <h3 style="color: #fff;">Hello there</h3>
                <p>Select one of our Customer Services below for WhatsApp assistance</p>
            </div>
            <div class='get-new hide'>
                <div id='get-label'></div>
                <div id='get-nama'></div>
            </div>
        </div>
        <div class='home-chat'>
            <!-- Info Contact Start -->
            <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
                <div class='info-avatar'><img
                        src='https://2.bp.blogspot.com/-y6xNA_8TpFo/XXWzkdYk0MI/AAAAAAAAA5s/RCzTBJ_FbMwVt5AEZKekwQqiDNqdNQJjgCLcBGAs/s70/supportmale.png' />
                </div>
                <div class='info-chat'>
                    <span class='chat-label' style="font-size: 14px;">Support</span>
                    <span class='chat-nama'>Customer Service 1</span>
                </div><span class='my-number'>6285777400685</span>
            </a>
            <!-- Info Contact End -->
            <!-- Info Contact Start -->
            <a class='informasi' href='javascript:void' title='Chat Whatsapp'>
                <div class='info-avatar'><img
                        src='https://4.bp.blogspot.com/-X1Xs2iRKabY/XXWzkqQ-iDI/AAAAAAAAA5w/HSyhR0gIXvUzlAx5XgaZzmlrCJkTgrOFQCLcBGAs/s70/supportfemale.png' />
                </div>
                <div class='info-chat'>
                    <span class='chat-label' style="font-size: 14px;">Sales</span>
                    <span class='chat-nama'>Customer Service 2</span>
                </div><span class='my-number'>6285777400685</span>
            </a>
            <!-- Info Contact End -->
            <div class='blanter-msg'>Support <b>Live Chat</b> 24/7</div>
        </div>
        <div class='start-chat hide'>
            <div class='first-msg'><span>Hello, how can I help you now?</span></div>
            <div class='blanter-msg'>
                <textarea id='chat-input' placeholder='Please enter your message' maxlength='120' row='1'></textarea>
                <a href='javascript:void;' id='send-it' style="width: 50px; height: 35px;">Send</a>
            </div>
        </div>
        <div id='get-number'></div><a class='close-chat' href='javascript:void'>×</a>
    </div>
    <a class='blantershow-chat' href='javascript:void' title='Show Chat'><i class='fab fa-whatsapp'></i>Chat with us</a>
    <script type='text/javascript'>
        //<![CDATA[
        /* Whatsapp Chat Widget by Maks Miliyan*/
        $(document).on("click", "#send-it", function() {
            var a = document.getElementById("chat-input");
            if ("" != a.value) {
                var b = $("#get-number").text(),
                    c = document.getElementById("chat-input").value,
                    d = "https://web.whatsapp.com/send",
                    e = b,
                    f = "&text=" + c;
                if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) var
                    d = "whatsapp://send";
                var g = d + "?phone=" + e + f;
                window.open(g, '_blank')
            }
        }), $(document).on("click", ".informasi", function() {
            document.getElementById("get-number").innerHTML = $(this).children(".my-number").text(), $(
                    ".start-chat,.get-new").addClass("show").removeClass("hide"), $(".home-chat,.head-home")
                .addClass("hide").removeClass("show"), document.getElementById("get-nama").innerHTML = $(this)
                .children(".info-chat").children(".chat-nama").text(), document.getElementById("get-label")
                .innerHTML = $(this).children(".info-chat").children(".chat-label").text()
        }), $(document).on("click", ".close-chat", function() {
            $("#whatsapp-chat").addClass("hide").removeClass("show")
        }), $(document).on("click", ".blantershow-chat", function() {
            $("#whatsapp-chat").addClass("show").removeClass("hide")
        });
        //]]>
    </script>


    {{ $slot }}

    <x-frontend.partials.footer></x-frontend.partials.footer>

    <x-frontend.partials.copyright></x-frontend.partials.copyright>

    <x-frontend.partials.goto></x-frontend.partials.goto>



    <!-- <script data-cfasync="false" src="cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
    <script src="{{ asset('frontend') }}/assets/js/jquery.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/meanmenu.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/wow.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/owl.carousel.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/nice-select.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/magnific-popup.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/jarallax.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/appear.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/odometer.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/smoothscroll.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/form-validator.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/contact-form-script.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/ajaxchimp.min.js"></script>

    <script src="{{ asset('frontend') }}/assets/js/custom.js"></script>

    <script src="{{ asset('library/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('js/utils.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.full.min.js"></script>

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
