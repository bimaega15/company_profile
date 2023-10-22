<section class="about-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img about-img-two">
                    <img data-cfsrc="{{ asset('upload/settings/logo/'.UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}" style="display:none;visibility:hidden;"><noscript>

                        <img src="{{ asset('upload/settings/logo/'.UtilsHelp::settingApp()->logo_settings) }}" alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript>

                    <div class="experience">
                        <div class>
                            <h2>Lebih dari 10 tahun Pengalaman</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title">Tentang Kami</span>
                    <h2>Visi & Misi</h2>
                    <p>{!! UtilsHelp::limitTextGlobal(UtilsHelp::aboutUs()->visimisi_tentangkami, 1200) !!}</p>

                    <a href="{{ route('website.aboutUs.index') }}" class="default-btn">
                        <span>Tentang Kami</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>