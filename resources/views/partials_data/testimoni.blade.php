<section class="services-area services-area-two bg-color pt-100 pb-70">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span><b>Cleint Testimonial</b></span>
            <h3>Let's Know About All Of Our Client Says</h3>
            {{-- <p>List of several testimonials for you to know about clients who have experienced our services,
                Come join us and feel the benefits that you feel</p> --}}
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            @foreach (UtilsHelp::testimoni() as $item)
                <div class="single-testimonials">
                    <img data-cfsrc="{{ asset('upload/testimoni/' . $item->gambar_testimoni) }}"
                        alt="{{ $item->gambar_testimoni }}"
                        style="display:none;visibility:hidden; width: 150px; height: 150px;"><noscript><img
                            src="{{ asset('upload/testimoni/' . $item->gambar_testimoni) }}"
                            alt="{{ $item->gambar_testimoni }}"></noscript>
                    <h3 style="font-size: 20px; margin-bottom: 5px;">{{ $item->nama_testimoni }}</h3>
                    <span>{{ $item->posisi_testimoni }}</span>
                    <p>{!! $item->pesan_testimoni !!}</p>
                    {{-- <ul>
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $item->rating_testimoni)
                            @else
                            @endif
                        @endfor
                    </ul> --}}
                    <div class="quotes">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
