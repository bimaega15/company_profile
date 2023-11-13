<style>
    .shipment-content .shipment-btn .default-btn.active {
        margin-left: 30px;
        background-color: transparent;
        border: 1px solid #0383ff;
        color: #0383ff;
    }
</style>
<section class="about-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img about-img-two">
                    {{-- <img data-cfsrc="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                        alt="{{ UtilsHelp::settingApp()->logo_settings }}"
                        style="display:none;visibility:hidden;"><noscript>

                        <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript> --}}
                    <img data-cfsrc="{{ asset('frontend') }}/assets/img/about-img-4.png" alt="Image"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('frontend') }}/assets/img/about-img-4.png" alt="Image"></noscript>

                    {{-- <div class="experience">
                        <div class>
                            <h2>Lebih dari 10 tahun Pengalaman</h2>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title"><b>Who we are</b></span>
                    <h3>Modern and Trusted Trucking Company</h3>
                    <p style="text-align: justify;">{!! UtilsHelp::limitTextGlobal(UtilsHelp::aboutUs()->visimisi_tentangkami, 600) !!}</p>
                    <ul>
                        <li>
                            <i class="bx bx-check"></i> 24/7 Business Support
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Secure Transportation
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Easy And Quick Transportation
                        </li>
                        <li>
                            <i class="bx bx-check"></i> World Wide Most Effective Transportation
                        </li>
                    </ul>
                    <a href="{{ route('website.aboutUs.index') }}" class="default-btn"
                        style="border-radius: 5px; background-color: transparent; border: 1px solid #0383ff; color: #0383ff;">
                        <span>Explore Us</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
