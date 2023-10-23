<x-frontend-layout>
    <div class="page-title-area bg-19">
        <div class="container">
            <div class="page-title-content">
                <h2>Blogs Website</h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">Blogs</li>
                </ul>
            </div>
        </div>
    </div>


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
                            <h3 class="widget-title">Berita Terkini</h3>
                            <ul>
                                @foreach ($recentPost as $item)
                                <li>
                                    <a href="blog-details.html">
                                        {{$item->judul_berita}}
                                        <img data-cfsrc="{{ asset('upload/gambarberita/'.$item->gambar_berita) }}" alt="{{$item->gambar_berita}}" style="height: 100px;"><noscript><img src="{{ asset('upload/gambarberita/'.$item->gambar_berita) }}" alt="{{$item->gambar_berita}}"></noscript>
                                    </a>
                                    <span>{{ UtilsHelp::tanggalBulanTahunKonversi($item->tanggalpublish_berita) }}</span>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Kategori</h3>
                            <ul>
                                @foreach ($kategoriBerita as $vKategoriBerita)
                                <li>
                                    <a href="#">{{$vKategoriBerita->nama_kategoriberita}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget categories">
                            <h3>Arsip</h3>
                            <ul>
                                @foreach ($uniqueMonthsYears as $monthYears)

                                <li>
                                    <a href="#">{{$monthYears}}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="sidebar-widget tags mb-0">
                            <h3>Tags</h3>
                            <ul>
                                <li>
                                    <a href="#">Road Transport</a>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="render_blogs" data-url="{{ route('website.blogs.renderBlogs') }}"></script>
    <script class="url_roots" data-url="{{ url('website')  }}"></script>
    <script src="{{ asset('js/website/blogs/index.js') }}"></script>
    @endpush
</x-frontend-layout>