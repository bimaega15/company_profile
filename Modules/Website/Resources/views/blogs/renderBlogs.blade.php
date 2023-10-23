<div class="row" id="section_blogs">
    @foreach ($berita as $index => $item)
    <div class="col-lg-12 col-md-6 {{ (count($berita) - 1 == $index) ? 'offset-md-3 offset-lg-0' : '' }}">
        <div class="single-blog-post">
            <div class="post-image">
                <a href="{{ route('website.blogs.show', $item->id) }}">
                    <img src="{{ asset('upload/gambarberita/'.$item->gambar_berita) }}" alt="{{ $item->gambar_berita }}" style="height: 250px;">
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
                <p class="isi_berita" data-id="{{ $item->id }}">{!! UtilsHelp::limitText($item->isi_berita, 500, $item) !!}</p>
                <a href="{{ route('website.blogs.show', $item->id) }}" class="default-btn read-more-btn">
                    <span>Read More</span>
                </a>
            </div>
        </div>
    </div>
    @endforeach



    <div class="col-lg-12 col-md-12">
        {{ $berita->links() }}
    </div>
</div>