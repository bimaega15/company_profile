<footer class="footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <a href="index.html" class="logo">
                        <img data-cfsrc="{{ asset('upload/settings/logo/'.UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="display:none;visibility:hidden;height: 150px;"><noscript><img src="{{ asset('upload/settings/logo/'.UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript>
                    </a>
                    <p>
                        {{ UtilsHelp::limitTextGlobal(UtilsHelp::settingApp()->deskripsi_settings, 400) }}
                    </p>
                    <ul class="social-icon">
                        <li>
                            <a href="#">
                                <i class="bx bxl-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-linkedin-square"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Pelayanan</h3>
                    <ul class="import-link">
                        <li>
                            <a href="#">Sea Freight</a>
                        </li>
                        <li>
                            <a href="#">Air Freight</a>
                        </li>
                        <li>
                            <a href="#">Road Freight</a>
                        </li>
                        <li>
                            <a href="#">Local Delivery</a>
                        </li>
                        <li>
                            <a href="#">Bus Freight</a>
                        </li>
                        <li>
                            <a href="#">Car Freight</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Perusahaan</h3>
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
                            <a href="{{ route('website.blogs.index') }}">Blog</a>
                        </li>
                        <li>
                            <a href="{{ route('website.privacyPolicy.index') }}">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="{{ route('website.terms.index') }}">Terms And Conditions</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single-footer-widget">
                    <h3>Alamat</h3>
                    <ul class="address">
                        <li class="location">
                            <i class="bx bxs-location-plus"></i>
                            {{ UtilsHelp::settingApp()->alamat_settings }}
                        </li>
                        <li>
                            <i class="bx bxs-envelope"></i>
                            <a href="mailto:{{ UtilsHelp::settingApp()->email_settings }}"><span class="__cf_email__" data-cfemail="345c5158585b74514e5d5b1a575b59">
                                    {{ UtilsHelp::settingApp()->email_settings }}
                                </span></a>
                        </li>
                        <li>
                            <i class="bx bxs-phone-call"></i>
                            <a href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">{{ UtilsHelp::settingApp()->nohp_settings }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>