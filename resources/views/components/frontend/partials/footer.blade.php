<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="single-footer-widget">
                    <a href="index.html" class="logo">
                        {{-- <img data-cfsrc="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->logo_settings }}"
                            style="display:none;visibility:hidden;height: >90px;"><noscript><img
                                src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                                alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript> --}}
                        <img data-cfsrc="{{ asset('frontend') }}/assets/img/logo-silver.png"
                            style="display:none;visibility:hidden;height: 100px;"><noscript><img
                                src="{{ asset('frontend') }}/assets/img/logo-silver.png"></noscript>
                    </a>
                    <p>
                        {{ UtilsHelp::limitTextGlobal(UtilsHelp::settingApp()->deskripsi_settings, 200) }}
                    </p>
                    <ul class="social-icon">
                        <li style="font-size: 25px;">
                            <a href="#" style="font-size: 25px;">
                                <i class="bx bxl-facebook" style="font-size: 35px; border: none"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-instagram" style="font-size: 35px; border: none"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin-square"
                                    style="font-size: 35px; border: none; padding-left: 8px;"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"
                                    style="font-size: 35px; border: none; none; padding-left: 20px;"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Service</h3>
                    <ul class="import-link">
                        <li>
                            <a href="#">Tractor Head</a>
                        </li>
                        <li>
                            <a href="#">Light Truck</a>
                        </li>
                        <li>
                            <a href="#">Flexibag</a>
                        </li>
                        <li>
                            <a href="#">Iso Tank</a>
                        </li>
                        <li>
                            <a href="#">Chemical Distribution</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Company</h3>
                    <ul class="import-link">
                        <li>
                            <a href="{{ route('website.aboutUs.index') }}">About Us</a>
                        </li>
                        <li>
                            <a href="{{ route('website.team.index') }}">Team</a>
                        </li>
                        <li>
                            <a href="{{ route('website.faq.index') }}">FAQ</a>
                        </li>
                        <li>
                            <a href="{{ route('website.blogs.index') }}">Project</a>
                        </li>
                        <li>
                            <a href="{{ route('website.privacyPolicy.index') }}">Contact Us</a>
                        </li>
                        {{-- <li>
                            <a href="{{ route('website.terms.index') }}">Terms And Conditions</a>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Head Office</h3>
                    <ul class="address">
                        <li class="location">
                            <i class="bx bxs-location-plus"></i>
                            {{ UtilsHelp::settingApp()->alamat_settings }}
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:{{ UtilsHelp::settingApp()->email_settings }}"><span class="__cf_email__"
                                    data-cfemail="345c5158585b74514e5d5b1a575b59">
                                    {{ UtilsHelp::settingApp()->email_settings }}
                                </span></a>
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">021 -
                                {{ UtilsHelp::settingApp()->nohp_settings }} / 026</a>
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:">021 - 29833208 / 029
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</footer>
