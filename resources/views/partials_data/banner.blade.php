<style>
    .banner-content h1 p {
        font-size: 53px;
        line-height: 63px;
    }
</style>
<section class="banner-area banner-area-two">
    <video loop muted autoplay poster="#" class="background-video">
        <source src="{{ asset('upload/videos/' . UtilsHelp::oneVideoBanner()->file_videos) }}" type="video/mp4">
    </video>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-content">
                    <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s">
                        {!! UtilsHelp::limitTextGlobal(UtilsHelp::oneVideoBanner()->keterangan_videos, 150) !!}
                    </h1>
                    <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">
                        {{ UtilsHelp::oneVideoBanner()->judul_videos }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
