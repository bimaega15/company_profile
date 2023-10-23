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
                    <p>{!! (UtilsHelp::aboutUs()->visimisi_tentangkami) !!}</p>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title">Tentang Kami</span>
                    <h2>Nilai nilai pada perusahaan</h2>
                    <p>{!! (UtilsHelp::aboutUs()->nilainilai_tentangkami) !!}</p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-img about-img-two">
                    <img data-cfsrc="{{ asset('upload/settings/icon/'.UtilsHelp::settingApp()->icon_settings) }}" alt="{{ UtilsHelp::settingApp()->icon_settings }}" style="display:none;visibility:hidden;"><noscript>
                        <img src="{{ asset('upload/settings/icon/'.UtilsHelp::settingApp()->icon_settings) }}" alt="{{ UtilsHelp::settingApp()->icon_settings }}"></noscript>
                </div>
            </div>
        </div>
    </div>
</section>