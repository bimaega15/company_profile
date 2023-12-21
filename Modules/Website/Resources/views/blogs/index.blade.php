<x-frontend-layout>
    <section class="banner-area bg-hal-blogs jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="banner-content">
                                {{-- <span class="top-title wow animate__animated animate__fadeInDown" data-wow-delay="1s">Home
                                    / Our Executives</span> --}}
                                <h2 style="font-size:40px;" class="wow animate__animated animate__fadeInDown"
                                    data-wow-delay="1s">News Megaduta</h2>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">Welcome to
                                    megaduta news portal! We are committed to providing the most up-to-date and accurate
                                    information on our various activities such as award acceptance, CSR programs,
                                    outings, family gatherings and other news. we aim to provide a comprehensive view of
                                    our development </p>
                                <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                                    <a style="border-radius: 7px;" href="#" class="default-btn">
                                        <span>View Our News</span>
                                    </a>
                                    {{-- <a href="contact-us.html" class="default-btn active">
                                        <span>Contact Us</span>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3">
                            <div class="video-btn-2 wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                <a href="https://www.youtube.com/watch?v=tEV5sXt6pV8" class="popup-youtube">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="blog-column-one-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="output_berita"></div>
                </div>
                <div class="col-lg-4">
                    <div class="widget-sidebar">
                        <div class="sidebar-widget search">
                            <form class="search-form">
                                <input class="form-control" name="search" placeholder="Search here" type="text">
                                <button class="search-button" type="submit">
                                    <i class="bx bx-search"></i>
                                </button>
                            </form>
                        </div>

                        <div class="sidebar-widget recent-post">
                            <h3 class="widget-title">Latest News</h3>
                            <ul>
                                @foreach ($recentPost as $item)
                                    <li>
                                        <a href="{{ route('website.blogs.show', $item->id) }}">
                                            {{ $item->judul_berita }}
                                            <img data-cfsrc="{{ asset('upload/gambarberita/' . $item->gambar_berita) }}"
                                                alt="{{ $item->gambar_berita }}"
                                                style="height:45px; border-radius: 5px; "><noscript><img
                                                    src="{{ asset('upload/gambarberita/' . $item->gambar_berita) }}"
                                                    alt="{{ $item->gambar_berita }}"></noscript>
                                        </a>
                                        <span>{{ UtilsHelp::tanggalBulanTahunKonversi($item->tanggalpublish_berita) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Category</h3>
                            <ul>
                                @foreach ($kategoriBerita as $vKategoriBerita)
                                    <li>
                                        <a href="#">{{ $vKategoriBerita->nama_kategoriberita }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Archive</h3>
                            <ul>
                                @foreach ($uniqueMonthsYears as $monthYears)
                                    <li>
                                        <a href="#">{{ $monthYears }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        {{-- <div class="sidebar-widget tags mb-0">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">ISO Tank</a>
                                </li>
                                <li>
                                    <a href="#">Sea Transport</a>
                                </li>
                                <li>
                                    <a href="#">Air Transport</a>
                                </li>
                                <li>
                                    <a href="#">Courier Service</a>
                                </li>
                                <li>
                                    <a href="#">Fast Freight</a>
                                </li>
                                <li>
                                    <a href="#">Home Delivery</a>
                                </li>
                                <li>
                                    <a href="#">Packaging</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
        <script class="render_blogs" data-url="{{ route('website.blogs.renderBlogs') }}"></script>
        <script class="url_roots" data-url="{{ url('website') }}"></script>
        <script src="{{ asset('js/website/blogs/index.js') }}"></script>
    @endpush
</x-frontend-layout>
