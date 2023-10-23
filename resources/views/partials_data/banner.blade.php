<section class="banner-area banner-area-two">
    <video loop muted autoplay poster="#" class="background-video">
        <source src="{{ asset('frontend/') }}/assets/img/banner/banner-video.mp4" type="video/mp4">
    </video>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-content">
                    <span class="top-title wow animate__animated animate__fadeInDown" data-wow-delay="1s">
                        {{ UtilsHelp::oneVideoBanner()->judul_videos }}
                    </span>
                    <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s">
                        {!! UtilsHelp::limitTextGlobal(UtilsHelp::oneVideoBanner()->keterangan_videos, 50) !!}
                    </h1>
                    <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">
                        Bergabunglah dengan jutaan orang yang mendapatkan penawaran murah
                    </p>
                    <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                        <a href="{{ route('website.pricing.index') }}" class="default-btn">
                            <span>Get A Free Quote</span>
                        </a>
                        <a href="{{ route('website.contactUs.index') }}" class="default-btn active">
                            <span>Contact Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>