<section class="blog-area blog-area-two pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Blog Kami</span>
            <h2>Jalin hubungan dengan artikel Blog kami dan bertemu dengan blog kami</h2>
            <p>Daftar beberapa blog yang tersedia pada website kami, ini akan memudahkan anda menemukan informasi, Kami semaksimalnya akan memberikan solusi yang terbaik </p>
        </div>
        <div class="row">
            @foreach (UtilsHelp::blogsLimit() as $index => $item)
            <div class="col-lg-4 col-md-6 {{ (count(UtilsHelp::blogsLimit()) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                <div class="single-blog-post">
                    <div class="post-image">
                        <a href="{{ route('website.blogs.show', $item->id) }}">
                            <img data-cfsrc="{{ asset('upload/gambarberita/'.$item->gambar_berita) }}" alt="{{ $item->gambar_berita }}" style="display:none;visibility:hidden;height: 250px;"><noscript><img src="{{ asset('upload/gambarberita/'.$item->gambar_berita) }}" alt="{{ $item->gambar_berita }}"></noscript>
                        </a>
                    </div>
                    <div class="blog-content">
                        <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>{{ UtilsHelp::tanggalBulanTahunKonversi($item->tanggalpublish_berita) }}</span>
                        </div>
                        <h3>
                            <a href="{{ route('website.blogs.show', $item->id) }}">{{ $item->judul_berita }}</a>
                        </h3>
                        <p>{!! UtilsHelp::limitTextGlobal($item->isi_berita, 400) !!}</p>
                        <a href="{{ route('website.blogs.show', $item->id) }}" class="default-btn">
                            <span>Read More</span>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>