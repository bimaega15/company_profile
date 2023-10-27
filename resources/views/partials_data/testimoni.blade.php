<section class="services-area services-area-two bg-color pt-100 pb-70">
    <div class="container-fluid p-0">
        <div class="section-title">
            <span><b>Testimoni</b></span>
            <h3>Let's find out about all our clients</h3>
            <p>List of several testimonials for you to know about clients who have experienced our services,
                Come join us and feel the benefits that you feel</p>
        </div>
        <div class="testimonials-slider owl-carousel owl-theme">
            @foreach (UtilsHelp::testimoni() as $item)
                <div class="single-testimonials">
                    <img data-cfsrc="{{ asset('upload/testimoni/' . $item->gambar_testimoni) }}"
                        alt="{{ $item->gambar_testimoni }}"
                        style="display:none;visibility:hidden; width: 150px; height: 150px;"><noscript><img
                            src="{{ asset('upload/testimoni/' . $item->gambar_testimoni) }}"
                            alt="{{ $item->gambar_testimoni }}"></noscript>
                    <h3>{{ $item->nama_testimoni }}</h3>
                    <span>{{ $item->posisi_testimoni }}</span>
                    <p>{!! $item->pesan_testimoni !!}</p>
                    {{-- <ul>
                        @for ($i = 1; $i <= 5; $i++)
                            @if ($i <= $item->rating_testimoni)
                            @else
                            @endif
                        @endfor
                    </ul> --}}
                    <div class="quotes">
                        <i class="flaticon-left-quotes-sign"></i>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="pumpkin-color"><b>FAQ Megaduta</b></span>
            <h3>Get Every Single Answer</h3>
            <p>We are ready to answer all general questions and can help answer general questions that often arise from
                our clients Megaduta</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <span>1</span>
                                Who is PT Megaduta Artha Megah?
                            </a>
                            <p class="accordion-content show" style="text-align: justify;">PT Megaduta Artha Megah is an
                                Indonesian private owned
                                company formed at Jakarta – Indonesia on March 2009 with strength based in the liquid
                                transportation by ISO-Tank and FLEXI-Tank Services.
                                <br>
                                <br>
                                PT Megaduta Artha Megah giving a total commitment to customer service, with the vision
                                of “to provide the most effective, efficient, reliable services”, for your logistics and
                                distributions”.
                                <br>
                                <br>
                                PT Megaduta Artha Megah has achieved and improved its service leading by support and
                                trusted from wide world principals, creating a global platform capable of providing a
                                range of intermodal solutions for any liquid, conventional, or containerized anywhere in
                                the world.
                            </p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>2</span>
                                What services are provided?
                            </a>
                            <p class="accordion-content">services or products provided by PT Megaduta Artha Megah such
                                as Flexibag, Trucking, Iso Tank, Container</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>3</span>
                                Let’s Find A Office Near You?
                            </a>
                            <p class="accordion-content"><b>Head Office : </b> Pulomas Office Park (Perkantoran Pulomas
                                Satu) Building 4, 3rd Floor, Room 10-10A Jl. Jend. A. Yani No. 2 Jakarta 13210
                                <br>
                                <br>
                                <b>Branch Office : </b> Jl. Tambak Osowilangun No. 9 A 20, Tambak Osowilangun, Kec.
                                Benowo,
                                Kota Surabaya, Jawa Timur 60191
                            </p>

                        </li>
                        {{-- <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>4</span>
                                Which Plan Is Right For Me?
                            </a>
                            <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem, ipsum
                                dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate, dolorum</p>
                        </li> --}}
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                </div>
            </div>
        </div>
    </div>
</section>
