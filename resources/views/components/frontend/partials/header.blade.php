<header class="header-area">
    <div class="top-header top-header-two">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-10">
                    <ul class="header-left-content">
                        <li>
                            <i class="bx bx-home"></i>
                            {{-- {{ UtilsHelp::settingApp()->alamat_settings }} --}}
                            Freight Forwarding, Iso Tank, Flexi Tank and Inland Chemical Distribution Service
                        </li>
                        {{-- <li>
                             <i class="bx bx-phone-call"></i>
                             <a
                                 href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">{{ UtilsHelp::settingApp()->nohp_settings }}</a>
                        </li>
                        <li>
                            <i class="bx bx-envelope"></i>
                            <a href="mailto:{{ UtilsHelp::settingApp()->email_settings }}"><span class="__cf_email__" data-cfemail="{{ UtilsHelp::settingApp()->email_settings }}">{{ UtilsHelp::settingApp()->email_settings }}</span></a>
                        </li> --}}
                    </ul>
                </div>
                <div class="col-lg-4 col-md-2">
                    <div class="header-right-content">
                        <ul class="flag-area">
                            <li class="flag-item-top">
                                <a href="#" class="flag-bar">
                                    <script type="text/javascript" style="display:none">
                                        //<![CDATA[
                                        window.__mirage2 = {
                                            petok: "gZ0uA5c98xaNeP8kumAm_CkdVPxpzrMR_GGtsEU17ys-1800-0"
                                        };
                                        //]]>
                                    </script>
                                    <script type="text/javascript" src="{{ asset('frontend/') }}/ajax.cloudflare.com/cdn-cgi/scripts/04b3eb47/cloudflare-static/mirage2.min.js">
                                    </script>
                                    <img data-cfsrc="{{ asset('frontend/') }}/assets/img/flag/usa.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend/') }}/assets/img/flag/usa.png" alt="Image"></noscript>
                                    <span>USA</span>
                                </a>
                                <ul class="flag-item-bottom">
                                    <li class="flag-item">
                                        <a href="#" class="flag-link">
                                            <img data-cfsrc="{{ asset('frontend/') }}/assets/img/flag/canada.png" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend/') }}/assets/img/flag/canada.png" alt="Image"></noscript>
                                            Indonesia
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="navbar-area navbar-area-style-two">
        <div class="mobile-nav">
            <div class="container">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html">
                            <img data-cfsrc="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="display:none;visibility:hidden;height: 70px;"><noscript><img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-nav">
            <div class="container">
                <nav class="navbar navbar-expand-md navbar-light">
                    <a class="navbar-brand" href="index.html">
                        <img data-cfsrc="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="display:none;visibility:hidden;height: 60px;"><noscript><img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript>
                    </a>
                    <div class="collapse navbar-collapse mean-menu">
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item">
                                <a href="{{ url('/website') }}" class="nav-link py-4 active">Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link py-4">
                                    About Us
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item">
                                        <a href="{{ url('/website/aboutUs') }}" class="nav-link">Profile</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ url('/website/team') }}" class="nav-link">Our Team</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link py-4">
                                    Product
                                    <i class="bx bx-chevron-down"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    @foreach (UtilsHelp::pricing() as $item)
                                    <li class="nav-item">
                                        <a href="{{ url('/website/product/'.$item->id.'/detail') }}" class="nav-link">{{ $item->kategori_produk }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('/website/blogs') }}" class="nav-link py-4">News</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/website/project') }}" class="nav-link py-4">Project</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/website/company') }}" class="nav-link py-4">Tracking Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/website/contactUs') }}" class="nav-link py-4">Contact Us</a>
                            </li>

                        </ul>
                        <div class="others-option">
                            <div class="get-quote">
                                <a style="border-radius:7px; font-size: 15px; padding-left: 23px; padding-right: 23px; padding-top: 13px; padding-bottom: 13px;" href="#" class="default-btn">
                                    <span>Job Careers</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="others-option-for-responsive">
            <div class="container">
                <div class="dot-menu">
                    <div class="inner">
                        <div class="circle circle-one"></div>
                        <div class="circle circle-two"></div>
                        <div class="circle circle-three"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>