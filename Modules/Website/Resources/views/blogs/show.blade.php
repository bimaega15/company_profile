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
                                    data-wow-delay="1s">Details News Megaduta</h2>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">Welcome to
                                    megaduta news portal! We are committed to providing the most up-to-date and accurate
                                    information on our various activities such as award acceptance, CSR programs,
                                    outings, family gatherings and other news. we aim to provide a comprehensive view of
                                    our development </p>
                                <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                                    {{-- <a style="border-radius: 7px;" href="#" class="default-btn">
                                        <span>View Our Executives</span>
                                    </a> --}}
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


    <div class="blog-details-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-content">
                        <div class="blog-details-img">
                            <img data-cfsrc="{{ asset('upload/gambarberita/' . $berita->gambar_berita) }}"
                                alt="Image"
                                style="display:none;visibility:hidden; border-top-left-radius:
                                14px; border-top-right-radius:14px;"><noscript><img
                                    src="{{ asset('upload/gambarberita/' . $berita->gambar_berita) }}"
                                    alt="Image"></noscript>
                        </div>
                        <div class="blog-top-content">
                            <div class="news-content">
                                <ul class="admin">
                                    <li>
                                        <a href="#">
                                            <i class="bx bx-user-circle"></i>
                                            PT Megaduta Artha Megah
                                        </a>
                                    </li>
                                    {{-- <li>
                                        <a href="#">
                                            <i class="bx bx-comment"></i>
                                            No comments
                                        </a>
                                    </li> --}}
                                    <li class="float">
                                        <i class="bx bx-calendar-alt"></i>
                                        {{ UtilsHelp::tanggalBulanTahunKonversi($berita->tanggalpublish_berita) }}
                                    </li>
                                </ul>
                                <h3 style="font-size: 22px;">{{ $berita->judul_berita }}</h3>
                                {!! $berita->isi_berita !!}
                            </div>
                        </div>
                        {{-- <div class="comments">
                            <h3>Comments (2)</h3>
                            <ul>
                                <li>
                                    <img data-cfsrc="{{ asset('frontend/') }}/assets/img/blog-details/comments-1.jpg"
                                        alt="Image" style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('frontend/') }}/assets/img/blog-details/comments-1.jpg"
                                            alt="Image"></noscript>
                                    <h3>Juanita Jones</h3>
                                    <span>Monday, October 20, 2020</span>
                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                    </p>
                                    <a href="#">
                                        Reply
                                    </a>
                                </li>
                                <li>
                                    <img data-cfsrc="{{ asset('frontend/') }}/assets/img/blog-details/comments-2.jpg"
                                        alt="Image" style="display:none;visibility:hidden;"><noscript><img
                                            src="{{ asset('frontend/') }}/assets/img/blog-details/comments-2.jpg"
                                            alt="Image"></noscript>
                                    <h3>Ward F. Nelson</h3>
                                    <span>Monday, October 20, 2020</span>
                                    <p>Lorem ipsum dolora sit amet, consectetur adipiscing elit sed do eiusmod tempor
                                        incdidunt labore et dolore magna aliqua. Veniam quis nostrud exercitation ullaco
                                    </p>
                                    <a href="#">
                                        Reply
                                    </a>
                                </li>
                            </ul>
                        </div> --}}
                        {{-- <div class="leave-reply">
                            <h3>Leave A Reply</h3>
                            <p>Your email address will not be published. Required fields are marked<span
                                    class="star">*</span></p>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Name<span class="star">*</span></label>
                                            <input type="text" name="name" id="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <label>Email address<span class="star">*</span></label>
                                            <input type="email" name="email" id="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Your website</label>
                                            <input type="text" name="your-website-link" id="your-website-link"
                                                class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Comment</label>
                                            <textarea name="message" class="form-control" id="message" rows="8"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="checkbox" id="chb2">
                                            <span>
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <button type="submit" class="default-btn page-btn">
                                            <span>Post A Comment</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div> --}}
                    </div>
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
                                        <a href="blog-details.html">
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
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-frontend-layout>
