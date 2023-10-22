<x-frontend-layout>

    <div class="page-title-area bg-1">
        <div class="container">
            <div class="page-title-content">
                <h2>About Us</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
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
                        <p>{!! ($aboutUs->visimisi_tentangkami) !!}</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-content">
                        <span class="top-title">Tentang Kami</span>
                        <h2>Nilai nilai pada perusahaan</h2>
                        <p>{!! ($aboutUs->nilainilai_tentangkami) !!}</p>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-img about-img-two">
                        <img data-cfsrc="{{ asset('upload/settings/icon/'.$setting->icon_settings) }}" alt="{{ $setting->icon_settings }}" style="display:none;visibility:hidden;"><noscript>
                            <img src="{{ asset('upload/settings/icon/'.$setting->icon_settings) }}" alt="{{ $setting->icon_settings }}"></noscript>
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


    <section class="choose-us-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-content">
                        <span class="top-title">Why Choose Us</span>
                        <h2>We Are The Best And That's Why You Can Choose Us Easily</h2>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet ratione eveniet eum. Quam enim
                            inventore, exercitationem error ad temporibus sit facere quaerat architecto impedit ullam
                            quasi vitae distinctio eos labore?</p>
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
                <div class="col-lg-6 col-md-6">
                    <div class="choose-us-img">
                        <img data-cfsrc="{{ asset('frontend') }}/assets/img/choose-us-img.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('frontend') }}/assets/img/choose-us-img.jpg" alt="Image"></noscript>
                    </div>
                </div>
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

    <section class="testimonials-area ptb-100">
        <div class="container-fluid p-0">
            <div class="section-title">
                <span>Testimoni</span>
                <h2>Mari tahu tentang semua klien kami</h2>
                <p>Daftar beberapa testimoni untuk anda ketahui kepada client yang sudah merasakan kepada pelayanan kami, mari bergabung bersama kami dan rasakan manfaat yang anda rasakan
                </p>
            </div>
            <div class="testimonials-slider owl-carousel owl-theme">
                @foreach ($testimoni as $item)
                <div class="single-testimonials">
                    <img data-cfsrc="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('upload/testimoni/'.$item->gambar_testimoni) }}" alt="{{ $item->gambar_testimoni }}"></noscript>
                    <h3>{{ $item->judul_testimoni }}</h3>
                    <p>{!! $item->pesan_testimoni !!}</p>
                    <h4>{{ $item->nama_testimoni }}</h4>
                    <span>{{ $item->posisi_testimoni }}</span>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="shipment-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="container">
            <div class="shipment-content">
                <span class="top-title">Shipment</span>
                <h2>Are You A Shipper? Please Knock Us On The Below Button</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam iste facere, unde nesciunt ratione amet
                    voluptatibus aut, iure magnam accusantium consequatur voluptatum nam ipsum in soluta consectetur
                    temporibus nobis itaque!</p>
                <div class="shipment-btn">
                    <a href="#" class="default-btn">
                        <span>Make A Shipment</span>
                    </a>
                    <a href="contact-us.html" class="default-btn active">
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <section class="team-area pt-100 pb-70">
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
</x-frontend-layout>