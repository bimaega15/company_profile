<x-frontend-layout>
    <div class="page-title-area bg-5">
        <div class="container">
            <div class="page-title-content">
                <h2>Testimonials</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Testimonials</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="testimonials-area testimonials-page pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Testimoni</span>
                <h2>Mari tahu tentang semua klien kami</h2>
                <p>
                    Daftar beberapa testimoni untuk anda ketahui kepada client yang sudah merasakan kepada pelayanan kami, mari bergabung bersama kami dan rasakan manfaat yang anda rasakan
                </p>
            </div>
            <div class="row">
                @foreach ($testimoni as $item)
                <div class="col-lg-4 col-md-4">
                    <div class="single-testimonials">
                        <img data-cfsrc="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}"></noscript>
                        <h3>{{ $item->judul_testimoni }}</h3>
                        <p>{!! $item->pesan_testimoni !!}</p>
                        <h4>{{ $item->nama_testimoni }}</h4>
                        <span>{{ $item->posisi_testimoni }}</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

</x-frontend-layout>