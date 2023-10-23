<section class="testimonials-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Testimoni</span>
            <h2>Mari tahu tentang semua klien kami</h2>
            <p>Daftar beberapa testimoni untuk anda ketahui kepada client yang sudah merasakan kepada pelayanan kami, mari bergabung bersama kami dan rasakan manfaat yang anda rasakan</p>
        </div>
        <div class="testimonials-slider-two owl-theme owl-carousel">
            @foreach (UtilsHelp::testimoni() as $item)
            <div class="single-testimonials-two">
                <img data-cfsrc="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}" style="display:none;visibility:hidden; width: 150px; height: 150px;"><noscript><img src="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}"></noscript>
                <h3>{{ $item->nama_testimoni }}</h3>
                <span>{{ $item->posisi_testimoni }}</span>
                <p>{!! $item->pesan_testimoni !!}</p>
                <ul>
                    @for ($i = 1; $i <= 5; $i++) @if ($i <=$item->rating_testimoni)
                        <li>
                            <i class="bx bxs-star"></i>
                        </li>
                        @else
                        <li>
                            <i class="bx bxs-star" style="color: #d3d3d3;"></i>
                        </li>
                        @endif
                        @endfor
                </ul>
                <div class="quotes">
                    <i class="flaticon-left-quotes-sign"></i>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>