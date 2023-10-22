<x-frontend-layout>
    <section class="banner-area banner-area-two">
        <video loop muted autoplay poster="#" class="background-video">
            <source src="{{ asset('frontend/') }}/assets/img/banner/banner-video.mp4" type="video/mp4">
        </video>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-content">
                        <span class="top-title wow animate__animated animate__fadeInDown" data-wow-delay="1s">Welcome to ezio</span>
                        <h1 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s">One Of The Best And New Logistics Service Provider</h1>
                        <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">Join the millions getting bargain deals on shipping cars furniture freight and more</p>
                        <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                            <a href="pricing-style-one.html" class="default-btn">
                                <span>Get A Free Quote</span>
                            </a>
                            <a href="contact-us.html" class="default-btn active">
                                <span>Contact Us</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="feature-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature-box">
                        <i class="flaticon-fast-delivery-1"></i>
                        <h3>Road Transport</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-feature-box">
                        <i class="flaticon-boat"></i>
                        <h3>Sea Transport</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-feature-box">
                        <i class="flaticon-airplane"></i>
                        <h3>Air Transport</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="partner-area bg-color ptb-70">
        <div class="container">
            <div class="row">
                <div class="partner-slider owl-carousel owl-theme">
                    @foreach ($client as $item)
                    <div class="partner-item">
                        <a href="#">
                            <img data-cfsrc="{{ asset('upload/clients/'.$item->gambar_clients) }}" alt="Image" style="display:none;visibility:hidden; height: 120px;"><noscript><img src="{{ asset('upload/clients/'.$item->gambar_clients) }}" alt="Image" style="height: 120px;"></noscript>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


    <section class="about-us-area pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-img about-img-two">
                        <img data-cfsrc="{{ asset('upload/settings/logo/'.$setting->logo_settings) }}" alt="{{ $setting->logo_settings }}" style="display:none;visibility:hidden;"><noscript>

                            <img src="{{ asset('upload/settings/logo/'.$setting->logo_settings) }}" alt="{{ $setting->logo_settings }}"></noscript>

                        <div class="experience">
                            <div class>
                                <h2>Lebih dari 10 tahun Pengalaman</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">Tentang Kami</span>
                        <h2>Visi & Misi</h2>
                        <p>{!! UtilsHelp::limitTextGlobal($aboutUs->visimisi_tentangkami, 1200) !!}</p>

                        <a href="{{ route('website.aboutUs.index') }}" class="default-btn">
                            <span>Tentang Kami</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services-area services-area-two bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Layanan Kami</span>
                <h2>Percayakan kepada layanan kami</h2>
                <p>Daftar beberapa layanan pada perusahaan kami, anda bisa lihat beberapa kategori layanan dibawah ini, silahkan pilih sesuai yang anda minati, kami akan memberikan solusi yang terbaik buat anda</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box">
                        <a href="services-details.html" class="services-img">
                            <img data-cfsrc="{{ asset('frontend/') }}/assets/img/services/services-1.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript>

                                <img src="{{ asset('frontend/') }}/assets/img/services/services-1.jpg" alt="Image"></noscript>
                        </a>
                        <div class="services-content">
                            <h3>
                                <a href="services-details.html">Road Transport</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-services-box">
                        <a href="services-details.html" class="services-img">
                            <img data-cfsrc="{{ asset('frontend/') }}/assets/img/services/services-2.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend/') }}/assets/img/services/services-2.jpg" alt="Image"></noscript>
                        </a>
                        <div class="services-content">
                            <h3>
                                <a href="services-details.html">Sea Transport</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                    <div class="single-services-box">
                        <a href="services-details.html" class="services-img">
                            <img data-cfsrc="{{ asset('frontend/') }}/assets/img/services/services-3.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend/') }}/assets/img/services/services-3.jpg" alt="Image"></noscript>
                        </a>
                        <div class="services-content">
                            <h3>
                                <a href="services-details.html">Air Transport</a>
                            </h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga nostrum minima eligendi neque labore asperiores.</p>
                            <a href="services-details.html" class="read-more">
                                Read More
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="choose-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="choose-us-content">
                        <span class="top-title">Why Choose Us</span>
                        <h2>We Are The Best And That's Why You Can Choose Us Easily</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet ratione eveniet eum. Quam enim inventore, exercitationem error ad temporibus sit facere quaerat architecto impedit ullam quasi vitae distinctio eos labore?</p>
                        <div class="choose-us-slider owl-carousel owl-theme">
                            <div class="single-choose-us-box bg-color-1">
                                <i class="bx bx-calendar"></i>
                                <span>20+ Years Work Experiences</span>
                            </div>
                            <div class="single-choose-us-box bg-color-2">
                                <i class="bx bx-globe"></i>
                                <span>World's Areas Covered</span>
                            </div>
                            <div class="single-choose-us-box bg-color-3">
                                <i class="bx bx-user"></i>
                                <span>Corporate And Official Client</span>
                            </div>
                            <div class="single-choose-us-box bg-color-1">
                                <i class="bx bx-calendar"></i>
                                <span>20+ Years Work Experiences</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="choose-us-img">
                        <img data-cfsrc="{{ asset('frontend/') }}/assets/img/choose-us-img.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend/') }}/assets/img/choose-us-img.jpg" alt="Image"></noscript>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="counter-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-package"></i>
                        <h2>
                            <span class="odometer" data-count="950">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>Delivered Packages</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-worldwide"></i>
                        <h2>
                            <span class="odometer" data-count="850">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>Countries Covered</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-user"></i>
                        <h2>
                            <span class="odometer" data-count="550">00</span>
                            <span class="traget">+</span>
                        </h2>
                        <p>Happy Clients</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-counter">
                        <i class="flaticon-location-1"></i>
                        <h2>
                            <span class="odometer" data-count="440">00</span>
                            <span class="target">+</span>
                        </h2>
                        <p>Tons Of Goods</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-area pricing-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Harga Kami</span>
                <h2>Our Pricing Plan And All Other Details At A Glance</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugit porro, aliquid reprehenderit iusto inventore sint beatae ipsum impedit in sit numquam illum distinctio sequi quisquam et hic tempore</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-box">
                        <h3>Starter</h3>
                        <h2>$20 <sub>Monthly</sub></h2>
                        <a href="#" class="default-btn">
                            <span>Start This Plan</span>
                        </a>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                All-time access on all transports
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Have a good premium on member
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                60% Discount for the basic users
                            </li>
                            <li>
                                <i class="bx bx-x"></i>
                                All the time vat and tax-free
                            </li>
                            <li>
                                <i class="bx bx-x"></i>
                                Auto contact to our service point
                            </li>
                        </ul>
                        <span class="quality">Good</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-pricing-box">
                        <h3>Premium</h3>
                        <h2>$40 <sub>Monthly</sub></h2>
                        <a href="#" class="default-btn">
                            <span>Start This Plan</span>
                        </a>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                All-time access on all transports
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Have a good premium on member
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                60% Discount for the basic users
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                All the time vat and tax-free
                            </li>
                            <li>
                                <i class="bx bx-x"></i>
                                Auto contact to our service point
                            </li>
                        </ul>
                        <span class="quality">Better</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-pricing-box">
                        <h3>Platinum</h3>
                        <h2>$60 <sub>Monthly</sub></h2>
                        <a href="#" class="default-btn">
                            <span>Start This Plan</span>
                        </a>
                        <ul>
                            <li>
                                <i class="bx bx-check"></i>
                                All-time access on all transports
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Have a good premium on member
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                60% Discount for the basic users
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                All the time vat and tax-free
                            </li>
                            <li>
                                <i class="bx bx-check"></i>
                                Auto contact to our service point
                            </li>
                        </ul>
                        <span class="quality">Best</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="shipment-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="shipment-content">
                <span class="top-title">Shipment</span>
                <h2>Are You A Shipper? Please Knock Us On The Below Button</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam iste facere, unde nesciunt ratione amet voluptatibus aut, iure magnam accusantium consequatur voluptatum nam ipsum in soluta consectetur temporibus nobis itaque!</p>
                <div class="shipment-btn">
                    <a href="#" class="default-btn">
                        <span>Make A Shipment</span>
                    </a>
                    <a href="{{ route('website.aboutUs.index') }}" class="default-btn active">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="testimonials-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Testimoni</span>
                <h2>Mari tahu tentang semua klien kami</h2>
                <p>Daftar beberapa testimoni untuk anda ketahui kepada client yang sudah merasakan kepada pelayanan kami, mari bergabung bersama kami dan rasakan manfaat yang anda rasakan</p>
            </div>
            <div class="testimonials-slider-two owl-theme owl-carousel">
                @foreach ($testimoni as $item)
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


    <section class="team-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Tim Kami</span>
                <h2>
                    Membutuhkan support atau bantuan lainnya? Hubungi Tim Kami
                </h2>
            </div>
            <div class="row">
                @foreach ($aboutUsDetail as $index => $item)
                <div class="col-lg-4 col-md-6 {{ (count($aboutUsDetail) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                    <div class="single-team-member">
                        <img data-cfsrc="{{ asset('upload/testimoni/'. $item->gambar_tentangdetail) }}" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('upload/testimoni/'.$item->gambar_tentangdetail) }}" alt="Image"></noscript>
                        <div class="team-content">
                            <span>{{ $item->judul_tentangdetail }}</span>
                            <h3>{{ $item->nama_tentangdetail }}</h3>
                            <div class="team-social">
                                <a href="#" class="control">
                                    <i class="bx bx-share-alt"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="bx bxl-linkedin-square"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="blog-area blog-area-two pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Blog Kami</span>
                <h2>Jalin hubungan dengan artikel Blog kami dan bertemu dengan blog kami</h2>
                <p>Daftar beberapa blog yang tersedia pada website kami, ini akan memudahkan anda menemukan informasi, Kami semaksimalnya akan memberikan solusi yang terbaik </p>
            </div>
            <div class="row">
                @foreach ($blogs as $index => $item)
                <div class="col-lg-4 col-md-6 {{ (count($blogs) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
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


    <section class="track-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container bg-white">
            <div class="row">
                <div class="col-lg-12">
                    <section class="main-contact-area ptb-100">
                        <div class="container">
                            <div class="section-title">
                                <h2>Kirim pesan kepada kami, untuk pesan apapun</h2>
                            </div>
                            <form id="contactForm">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="name" id="name" class="form-control" required data-error="Isi nama anda" placeholder="Nama">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="email" name="email" id="email" class="form-control" required data-error="Isi Email anda" placeholder="Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="phone_number" id="phone_number" required data-error="Isi no. telepon anda" class="form-control" placeholder="No. handphone">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group">
                                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Isi subjek pesan anda" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Isi pesan anda" placeholder="Pesan"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group checkboxs">
                                            <input type="checkbox" id="chb2" name="is_agree">
                                            <p>
                                                Accept <a href="{{ url('website/terms') }}">Terms & Conditions</a> And <a href="{{ url('website/privacyPolicy') }}">Privacy Policy.</a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="default-btn btn-two">
                                            <span>Kirim Pesan</span>
                                        </button>
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>