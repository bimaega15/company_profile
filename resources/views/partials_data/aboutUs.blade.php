<section class="about-us-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-img about-img-two">
                    {{-- <img data-cfsrc="{{ asset('upload/settings/perusahaan/' . UtilsHelp::settingApp()->perusahaan_settings) }}"
                        alt="{{ UtilsHelp::settingApp()->perusahaan_settings }}"
                        style="display:none;visibility:hidden;"><noscript>
                        <img src="{{ asset('upload/settings/perusahaan/' . UtilsHelp::settingApp()->perusahaan_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->perusahaan_settings }}"></noscript> --}}

                    {{-- <div class="experience">
                        <div class>
                            <h2>Lebih dari 10 tahun Pengalaman</h2>
                        </div>
                    </div> --}}
                    <img data-cfsrc="{{ asset('frontend') }}/assets/img/banner/7.jpg" alt="Image"
                        style="display:none;visibility:hidden; border-radius: 10px;"><noscript><img
                            src="{{ asset('frontend') }}/assets/img/banner/7.jpg" alt="Image"></noscript>
                </div>
            </div>
            {{-- <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title">Tentang Kami</span>
                    <h2>Visi & Misi</h2>
                    <p>{!! UtilsHelp::aboutUs()->visimisi_tentangkami !!}</p>
                </div>
            </div> --}}
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title"><b>About PT Megaduta Artha Megah</b></span>
                    <h3>We are a trusted trucking company, transportation services and Logistics Solutions</h3>
                    <p style="text-align: justify;">{!! UtilsHelp::limitTextGlobal(UtilsHelp::aboutUs()->visimisi_tentangkami, 600) !!}</p>
                    {{-- <ul>
                        <li>
                            <i class="bx bx-check"></i> 24/7 Business Support
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Secure Transportation
                        </li>
                        <li>
                            <i class="bx bx-check"></i> Easy And Quick Transportation
                        </li>
                        <li>
                            <i class="bx bx-check"></i> World Wide Most Effective Transportation
                        </li>
                    </ul> --}}
                    <a href="#" class="default-btn"
                        style="border-radius: 7px; text-align: left; margin-top:-2px;">
                        <span style="text-align: left; font-size: 16px; font-weight: bold;">14 Years Experience</span>
                    </a>
                </div>
            </div>
        </div>

        {{-- <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title">Tentang Kami</span>
                    <h2>Nilai nilai pada perusahaan</h2>
                    <p>{!! UtilsHelp::aboutUs()->nilainilai_tentangkami !!}</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-img about-img-two">
                    <img data-cfsrc="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                        alt="{{ UtilsHelp::settingApp()->logo_settings }}"
                        style="display:none;visibility:hidden; width: 100%;"><noscript>
                        <img src="{{ asset('upload/settings/logo/' . UtilsHelp::settingApp()->logo_settings) }}"
                            alt="{{ UtilsHelp::settingApp()->logo_settings }}"></noscript>
                </div>
            </div>
        </div> --}}
    </div>
</section>
<section class="services-area services-area-two bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><b>Milestone Megaduta</b></span>
            <h3>Every Achievement is a Devotion</h3>
            {{-- <p>More than a track record, this achievement is a reminder to maintain
                commitment and dedication in serving customers in Indonesia. --}}
            </p>
        </div>
        {{-- <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-services-box">
                    <a href="#" class="services-img">
                        <img data-cfsrc="{{ asset('frontend') }}/assets/img/services/services-1.jpg" alt="Image"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('frontend') }}/assets/img/services/services-1.jpg"
                                alt="Image"></noscript>
                    </a>
                    <div class="services-content">
                        <h3>
                            <a href="#">Flexi Tank</a>
                        </h3>
                        <p>FlexiTank is one of the innovative packaging product for cost-effective liquid
                            transportation. and eliminate the risk of
                            cross contamination.</p>
                        <!-- <a href="#" class="read-more">
                                Read More
                            </a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-services-box">
                    <a href="#" class="services-img">
                        <img data-cfsrc="{{ asset('frontend') }}/assets/img/services/isotank.jpg" alt="Image"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('frontend') }}/assets/img/services/isotank.jpg" alt="Image"></noscript>
                    </a>
                    <div class="services-content">
                        <h3>
                            <a href="#">Iso Tank</a>
                        </h3>
                        <p>PT Megaduta Artha Megah provide Iso Tank Containter Services. Iso Tank was certified by
                            International Standard
                            Organization.</p>
                        <!-- <a href="services-details.html" class="read-more">
                                Read More
                            </a> -->
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-services-box">
                    <a href="#" class="services-img">
                        <img data-cfsrc="{{ asset('frontend') }}/assets/img/services/services-4.jpg" alt="Image"
                            style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('frontend') }}/assets/img/services/services-4.jpg"
                                alt="Image"></noscript>
                    </a>
                    <div class="services-content">
                        <h3>
                            <a href="#">Trucking</a>
                        </h3>
                        <p>Having a highly motivated and dedicated team, as well as reliable land transportation
                            partners who have experience in
                            various multimodal fields.</p>
                        <!-- <a href="services-details.html" class="read-more">
                                Read More
                            </a> -->
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row">
            <div class="blog-slider owl-carousel owl-theme">
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2020</a>
                        </h3>
                        <p style="text-align: justify;">Expand our global and in-land network by making an agreement and
                            collaboration with many industries and also foreign and national logistic company.
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2019</a>
                        </h3>
                        <p style="text-align: justify;">Already have 40 unit in total of escalation from 2013 until
                            2019, in accordance to fulfill our new and existing customer. Also make a contract with PT.
                            Lesacho to export their goods.
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>

                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2018</a>
                        </h3>
                        <p style="text-align: justify;">Expand our business by establish branch office in Surabaya to
                            fulfill our customer demand and domestic shipping market. In the same year, we also make a
                            70 ISO tank procurement for PT. Clariant and PT. Shell Indonesia for their lubricant goods.
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2017</a>
                        </h3>
                        <p style="text-align: justify;">Increase investment by adding four more trailers to fulfill our
                            new customer demand.
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2016</a>
                        </h3>
                        <p style="text-align: justify;">Enlarge our network by cooperate with overseas tank container
                            operator company along with export demand using tank container which is increasing from time
                            to time.
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2015</a>
                        </h3>
                        <p style="text-align: justify;">We invest more unit due to escalation of demand numbers.
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2014</a>
                        </h3>
                        <p style="text-align: justify;">Make a work-contract with PT. Evonik for raw material and
                            finished goods distribution.
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2013</a>
                        </h3>
                        <p style="text-align: justify;">We invest our own eight-unit trailers as a part of safety
                            transport implementation, and launch a sustainable program to become a reliable and
                            compatible transporter to satisfy market demand. And we make an agreement PT. Styron and
                            BASF for their goods distribution.
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2012</a>
                        </h3>
                        <p style="text-align: justify;">We plan to expand our business by investing in a safety
                            standard for hazardous chemical trailer truck as a transportation tool to transport
                            hazardous chemical materials. We improve our service to become One-Stop Supply Chain
                            Management provider.
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2011</a>
                        </h3>
                        <p style="text-align: justify;">
                            To enhance our liquid transport services, we now offer Flexibag solutions for the safe
                            delivery of non-hazardous liquid chemicals and food materials. This includes efficient
                            customs clearance management. Our inaugural Flexibag export service is for PT. Bayer.
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2010</a>
                        </h3>
                        <p style="text-align: justify;">We expand our business by opening a new service in the complete
                            transportation service
                            solution so that we can always compete and giving a total logistic solution
                            <br>
                            <br>
                            <br>
                        </p>

                    </div>
                </div>
                <div class="single-blog-post" style="border-radius: 14px;">
                    <div class="post-image" style="border-radius: 14px;">
                        {{-- <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/iso-tank.jpg"
                                    alt="image"></noscript>
                        </a> --}}
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3 style="text-align: left;">
                            <a href="#" style="text-align: left;">2009</a>
                        </h3>
                        <p style="text-align: justify;">PT Megaduta Artha Megah was established as a tank container
                            agent with innovations in shipping services for the chemical industry, especially liquid
                            chemicals using tank containers and ISO Tanks.
                            <br>
                            <br>
                            <br>

                        </p>

                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="single-blog-post"
                    style="border-top-left-radius: 14px; border-top-right-radius: 14px; border-bottom-left-radius:14px; border-bottom-right-radius:14px;">
                    <div class="post-image" style="border-top-left-radius: 14px; border-top-right-radius: 14px;">
                        <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/mission-blog.jpg" alt="image"
                                style="display:none;visibility:hidden; "><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/mission-blog.jpg"
                                    alt="image"></noscript>
                        </a>
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>06 October 2019</span>
                        </div> --}}
                        <h3>
                            <a href="#">Our Vision</a>
                        </h3>
                        <p>Our vision as a company that focusing in logistic and transportation sector is to provide the
                            most effective, efficient, reliable services solution for your logistics and transportation
                            <br>
                            <br>
                        </p>
                        {{-- <a href="blog-details.html" class="default-btn">
                            <span>Read More</span>
                        </a> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="single-blog-post"
                    style="border-top-left-radius: 14px; border-top-right-radius: 14px; border-bottom-left-radius:14px; border-bottom-right-radius:14px;">
                    <div class="post-image" style="border-top-left-radius: 14px; border-top-right-radius: 14px;">
                        <a href="#">
                            <img data-cfsrc="{{ asset('frontend') }}/assets/img/blog/mision.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/mision.jpg"
                                    alt="image"></noscript>
                        </a>
                    </div>
                    <div class="blog-content">
                        {{-- <div class="date">
                            <i class="bx bx-calendar"></i>
                            <span>07 October 2019</span>
                        </div> --}}
                        <h3>
                            <a href="#">Our Mission</a>
                        </h3>
                        <p>1. To provide the most efficient transportation solution
                            <br>
                            2. All actions are based on innovation
                            <br>
                            3. To implement service-driven culture and people development
                            <br>
                            4. Safety and integrity are the frame work of our
                            core values

                        </p>
                        {{-- <a href="blog-details.html" class="default-btn">
                            <span>Read More</span>
                        </a> --}}
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
                    <br>
                    <br>
                    <br>
                    {{-- <span class="top-title"><b>Why Choose Us</b></span> --}}
                    <h3>Our Company Culture</h3>
                    <p style="text-align: justify;">As a company who prioritize client satisfaction, we invariably set
                        customer service as our main focus. We committed to always bring solution to help our customer
                        reach their desire. Our people always find a way to achieved and improved its service with
                        support and trust from worldwide principals, capable of providing intermodal solutions for any
                        liquid, conventional, or containerized anywhere in the world. Our customer’s satisfaction is
                        foremost in our commitment, particularly in need of a partner with high safety standards and
                        best quality.
                    </p>
                    {{-- <div class="choose-us-slider owl-carousel owl-theme">
                        <a href="#">
                            <img style="border-radius: 10px;"
                                data-cfsrc="{{ asset('frontend') }}/assets/img/blog/cleaner.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/cleaner.jpg"
                                    alt="image"></noscript>
                            <p style="text-align: center; font-weight: bold; margin-top:5px;">Custom Clearance </p>
                        </a>
                        <a href="#">
                            <img style="border-radius: 10px;"
                                data-cfsrc="{{ asset('frontend') }}/assets/img/blog/land-transportasi-baru3.jpg"
                                alt="image" style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/land-transportasi-baru3.jpg"
                                    alt="image"></noscript>
                            <p style="text-align: center; font-weight: bold; margin-top:5px;">In-Land Transport </p>
                        </a>
                        <a href="#">
                            <img style="border-radius: 10px;"
                                data-cfsrc="{{ asset('frontend') }}/assets/img/blog/train5.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/train5.jpg"
                                    alt="image"></noscript>
                            <p style="text-align: center; font-weight: bold; margin-top:5px;">Train </p>
                        </a>
                        <a href="#">
                            <img style="border-radius: 10px;"
                                data-cfsrc="{{ asset('frontend') }}/assets/img/blog/container2.jpg" alt="image"
                                style="display:none;visibility:hidden;"><noscript><img
                                    src="{{ asset('frontend') }}/assets/img/blog/container2.jpg"
                                    alt="image"></noscript>
                            <p style="text-align: center; font-weight: bold; margin-top:5px;">Container Vessel</p>
                        </a>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="choose-us-img">
                    <img style="border-radius: 12px;"
                        data-cfsrc="{{ asset('frontend/') }}/assets/img/services/gambar-kanan-about.jpg"
                        alt="Image" style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('frontend/') }}/assets/img/services/gambar-kanan-about.jpg"
                            alt="Image"></noscript>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about-us-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-img">
                    <img style="border-radius: 12px;"
                        data-cfsrc="{{ asset('frontend/') }}/assets/img/gambar-kiri5.jpg" alt="Image"
                        style="display:none;visibility:hidden;"><noscript><img
                            src="{{ asset('frontend/') }}/assets/img/gambar-kiri5.jpg" alt="Image"></noscript>
                    {{-- <div class="experience">
                        <div class> 
                            <h2>20 Years Of Experience</h2>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-content">
                    <span class="top-title"><b>Our Solution</b></span>
                    <h3>We Deliver The Impossible</h3>
                    <p style="text-align: justify;">We are the One-stop services solution to many industries product
                        handling. We spread our ability to handle delivery of our customer product across a diverse
                        range of industry sectors. Since each industry has its own features and requirements, it allows
                        us to always explore and innovate in order to meet our customer needs resulting in high quality
                        and satisfying services.
                        <br>
                        <br>
                        As our accountability to transport our
                        customer dangerous goods, our units already have an approval and certificate from related
                        government institution such as Ministry of Environments and Ministry of Transportation for
                        Dangerous Goods License Transporter. As a proof of our strong willing to fulfill our commitment,
                        we proudly convey that our company is a member of Responsible Care Indonesia (RCI) and a
                        certified Responsible Care program to implement code of management practices.
                        As a company who prioritize client satisfaction, we invariably set customer service as our main
                        focus.
                    </p>
                    {{-- <ul>
                        <li>
                            <i class="bx bx-check"></i>
                            Manufacture
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            Chemical
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            Food and Beverages
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            Medical
                        </li>
                        <li>
                            <i class="bx bx-check"></i>
                            Oil and Gas
                        </li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog-column-two-area ptb-100">
    <div class="container">

    </div>
</section>
