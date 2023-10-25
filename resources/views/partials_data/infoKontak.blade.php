  <section class="track-area ptb-100 bg-3">
      <div class="d-table">
          <div class="d-table-cell">
              <div class="container">
                  <div class="row align-items-center">
                      <div class="col-lg-5">
                          <div class="banner-content">
                              <span class="top-title wow animate__animated animate__fadeInDown"
                                  data-wow-delay="1s"></span>
                              <h2 class="wow animate__animated animate__fadeInDown" data-wow-delay="1s"
                                  style="font-size: 30px; color: #fff;">If You Have Any
                                  Questions, Please Feel Free to Contact Us.</h2>
                              <p style="color: #fff;" class="wow animate__animated animate__fadeInLeft"
                                  data-wow-delay="1s">PT Megaduta Artha
                                  Megah
                                  leverages over 14 years of experience and expertise in the transportation field to
                                  provide the best services.</p>
                              <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                                  <a href="pricing-style-one.html" class="default-btn">
                                      <span>View our products</span>
                                  </a>
                                  <a href="contact-us.html" class="default-btn active">
                                      <span>About Us</span>
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-7">
                          <div class="quote-price-content wow animate__animated animate__fadeInRight"
                              data-wow-delay="0.3s">
                              <div class="courses-title">
                                  <h3>Contact Megaduta Now</h3>
                                  <p>Let's start asking for transportation services.</p>
                              </div>
                              <form class="courses-form" id="contactForm"
                                  action="{{ route('website.contactUs.store') }}" method="post">
                                  <div class="row">
                                      <div class="col-lg-6 col-sm-6">
                                          <div class="form-group">
                                              <label>Topics</label>
                                              <select name="role_id" id="name" required
                                                  data-error="Isi Tujuan Pesan">
                                                  <option value="">Select Your Topics</option>
                                                  @foreach (UtilsHelp::roleContactUs() as $item)
                                                      <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                  @endforeach
                                              </select>

                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-sm-6">
                                          <div class="form-group">
                                              <label>Nama</label>
                                              <input style="border: 1px solid #fff; background-color: #fff;"
                                                  type="text" name="nama_kirimpesan" id="name"
                                                  class="form-control" required data-error="Isi nama anda"
                                                  placeholder="Enter Your Name">

                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-sm-6">
                                          <div class="form-group">
                                              <label>Email</label>
                                              <input style="border: 1px solid #fff; background-color: #fff;"
                                                  type="email" name="email_kirimpesan" id="email"
                                                  class="form-control" required data-error="Isi Email anda"
                                                  placeholder="Enter Your Email">

                                          </div>
                                      </div>
                                      <div class="col-lg-6 col-sm-6">
                                          <div class="form-group">
                                              <label>Phone</label>
                                              <input style="border: 1px solid #fff; background-color: #fff;"
                                                  type="text" name="nohandphone_kirimpesan" id="phone_number"
                                                  required data-error="Isi no. telepon anda" class="form-control"
                                                  placeholder="Enter Your Phone">

                                          </div>
                                      </div>
                                      <p></p>
                                      <div class="col-lg-12 col-sm-6">
                                          <div class="form-group">
                                              <label>Subject</label>
                                              <input style="border: 1px solid #fff; background-color: #fff;"
                                                  type="text" name="subject_kirimpesan" id="msg_subject"
                                                  class="form-control" required data-error="Isi subjek pesan anda"
                                                  placeholder="Subject">

                                          </div>
                                      </div>
                                      <p></p>
                                      <div class="col-lg-12 col-sm-6">
                                          <div class="form-group">
                                              <label>Message</label>
                                              <textarea style="border: 1px solid #fff; background-color: #fff;" name="pesan_kirimpesan" class="form-control"
                                                  id="message" cols="30" rows="10" required data-error="Isi pesan anda" placeholder="Enter Message"></textarea>

                                          </div>
                                      </div>
                                      <p></p>
                                      <div class="col-12">
                                          <div class="form-group checkboxs">
                                              <input type="checkbox" id="chb2" name="accepts_kirimpesan" required>
                                              <font style="color: #fff"> Accept <a href="{{ url('website/terms') }}"
                                                      style="color: #fff"><b>Terms & Conditions</b></a> And
                                                  <a href="{{ url('website/privacyPolicy') }}"
                                                      style="color: #fff"><b>Privacy Policy</b></a>
                                              </font>

                                          </div>
                                      </div>
                                      <div class="col-12">
                                          <button type="submit" class="default-btn" id="btn-submit-kirimpesan">
                                              <span>Apply Now</span>
                                              <div id="msgSubmit" class="h3 text-center hidden"></div>
                                              <div class="clearfix"></div>
                                          </button>
                                      </div>
                              </form>

                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  {{-- <section class="choose-us-area choose-us-area-three pt-100 pb-70">
      <div class="container">
          <div class="row align-items-center">
              <div class="col-lg-6">
                  <div class="choose-us-content mb-0">
                      <span class="top-title"><b>Contact Us</b></span>
                      <h2>We Are The Best And That's Why You Can Choose Us Easily</h2>
                      <p>Fill out the form to the right to get in touch with a member of our team to see how we can
                          serve your business.</p>
                      <div class="row">
                          <div class="col-lg-6 col-sm-6">
                              <div class="single-choose-us-box bg-color-1">
                                  <i class="bx bx-calendar"></i>
                                  <span>20+ Years Work Experiences</span>
                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-6">
                              <div class="single-choose-us-box bg-color-2">
                                  <i class="bx bx-globe"></i>
                                  <span>World's Areas Covered</span>
                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-6">
                              <div class="single-choose-us-box bg-color-2">
                                  <i class="bx bx-user"></i>
                                  <span>Corporate And Official Client</span>
                              </div>
                          </div>
                          <div class="col-lg-6 col-sm-6">
                              <div class="single-choose-us-box bg-color-1">
                                  <i class="bx bx-calendar"></i>
                                  <span>20+ Years Work Experiences</span>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6">
                  <div class="choose-us-img choose-us-img-three">
                      <img data-cfsrc="{{ asset('frontend') }}/assets/img/choose-us-img-3.jpg" alt="Image"
                          style="display:none;visibility:hidden;"><noscript><img
                              src="{{ asset('frontend') }}/assets/img/choose-us-img-3.jpg" alt="Image"></noscript>
                  </div>
              </div>
          </div>
      </div>
  </section>
  <div class="partner-area bg-color ptb-70">
      <div class="container">
          <div class="row">
              <div class="partner-slider owl-carousel owl-theme">
                  @foreach (UtilsHelp::client() as $item)
                      <div class="partner-item">
                          <a href="#">
                              <img data-cfsrc="{{ asset('upload/clients/' . $item->gambar_clients) }}" alt="Image"
                                  style="display:none;visibility:hidden; height: 120px;"><noscript><img
                                      src="{{ asset('upload/clients/' . $item->gambar_clients) }}" alt="Image"
                                      style="height: 120px;"></noscript>
                          </a>
                      </div>
                  @endforeach
              </div>
          </div>
      </div>
  </div> --}}
  {{-- <section class="contact-info-area bg-color pt-100 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-envelope"></i>
                      <h3>Email Us:</h3>
                      <a
                          href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#c3aba6afafac83a6b9aaaceda0acae"><span
                              class="__cf_email__"
                              data-cfemail="a4ccc1c8c8cbe4c1decdcb8ac7cbc9">[email&#160;protected]</span></a>
                      <a
                          href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#c9a0a7afa689acb3a0a6e7aaa6a4"><span
                              class="__cf_email__"
                              data-cfemail="9ef7f0f8f1defbe4f7f1b0fdf1f3">[email&#160;protected]</span></a>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-phone-call"></i>
                      <h3>Call Us:</h3>
                      <a href="tel:+1-(123)-456-7890">Tel. +1 (123) 456 7890</a>
                      <a href="tel:+1-(514)-312-6678">Tel. +1 (514) 312-6678</a>
                      <br>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-location-plus"></i>
                      <h3>London</h3>
                      <a href="#">9170 Millbrook Rd, Newark, IL 60541</a>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-support"></i>
                      <h3>Branch Office</h3>
                      <a href="#" style="text-align: justify;">Jl. Tambak Osowilangun No. 9 A 20, Tambak
                          Osowilangun, Kec. Benowo, Kota
                          Surabaya, Jawa Timur, 60191
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  {{-- <section class="contact-info-area bg-color pt-100 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-envelope"></i>
                      <h3>Email Us:</h3>
                      <a href="mailto:{{ UtilsHelp::settingApp()->email_settings }}"><span class="__cf_email__"
                              data-cfemail="{{ UtilsHelp::settingApp()->email_settings }}">{{ UtilsHelp::settingApp()->email_settings }}</span></a>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-phone-call"></i>
                      <h3>Call Us:</h3>
                      <a href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">Call.
                          {{ UtilsHelp::settingApp()->nohp_settings }}</a>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-location-plus"></i>
                      <h3>London</h3>
                      <a href="#">
                          {{ UtilsHelp::settingApp()->alamat_settings }}
                      </a>
                  </div>
              </div>
              <div class="col-lg-3 col-sm-6">
                  <div class="single-contact-info">
                      <i class="bx bx-support"></i>
                      <h3>Live Chat</h3>
                      <a href="#">Obrolan sepanjang waktu 24/7 jam</a>
                  </div>
              </div>
          </div>
      </div>
  </section> --}}
  <section class="services-details-area pt-100 pb-70">
      <div class="container">
          <div class="row">
              <div class="col-lg-8">
                  <div class="details-img">
                      <img style="border-radius: 6px;" data-cfsrc="{{ asset('frontend') }}/assets/img/contact-1.jpg"
                          alt="Image" style="display:none;visibility:hidden;"><noscript><img
                              src="{{ asset('frontend') }}/assets/img/contact-1.jpg" alt="Image"></noscript>
                  </div>
                  {{-- <div class="content-one">
                      <h3>Quality And Performance At The Right Price And Places</h3>
                      <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim
                          placerat facer possim assum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
                          diam nonummy nibh euismod tincidunt ut laoreet
                          dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation
                          ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat possim</p>
                      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                          illum dolore eu feugiat nulla facilisis. At vero eos et accusam et justo duo dolores et ea
                          rebum. Stet clita kasd gubergren, no sea takimata
                          sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing.</p>
                  </div> --}}
                  <div class="content-two">


                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="widget-sidebar">

                      <div class="sidebar-widget categories">
                          <h3>Head Office</h3>
                          <ul>
                              <li>
                                  <a href="#">Our head office is located in
                                      <br>
                                      {{ UtilsHelp::settingApp()->alamat_settings }}
                                  </a>
                              </li>
                              <li>
                                  <a href="#"> <a href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">021 -
                                          {{ UtilsHelp::settingApp()->nohp_settings }} / 026</a></a>
                              </li>
                              <li>
                                  <a href="#"> <a href="tel:{{ UtilsHelp::settingApp()->nohp_settings }}">021 -
                                          29833208 / 029</a></a>
                              </li>
                              {{-- <li>
                                  <a
                                      href="mailto:{{ UtilsHelp::settingApp()->email_settings }}">{{ UtilsHelp::settingApp()->email_settings }}</span></a>

                              </li> --}}
                              {{-- <li>
                                  <a href="#">Courier Service</a>
                              </li>
                              <li>
                                  <a href="#">Fast Freight</a>
                              </li>
                              <li>
                                  <a href="#">Home Delivery</a>
                              </li>
                              <li>
                                  <a href="#">Packageing</a>
                              </li> --}}
                          </ul>
                      </div>
                      <div class="sidebar-widget categories">
                          <h3>Branch Office</h3>
                          <ul>
                              <li>
                                  Jl. Tambak Osowilangun No. 9 A 20, Tambak Osowilangun, Kec. Benowo, Kota Surabaya,
                                  Jawa Timur 60191
                              </li>
                              <li>
                                  +6285920020545
                              </li>

                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </section>

  @push('custom_js')
      <script src="{{ asset('js/kirimpesan/index.js') }}"></script>
  @endpush
