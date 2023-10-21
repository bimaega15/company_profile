<x-frontend-layout>

    <div class="page-title-area bg-25">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="contact-info-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us:</h3>
                        <a href="mailto:{{$setting->email_settings}}"><span class="__cf_email__" data-cfemail="{{$setting->email_settings}}">{{$setting->email_settings}}</span></a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-phone-call"></i>
                        <h3>Call Us:</h3>
                        <a href="tel:{{$setting->nohp_settings}}">Call. {{$setting->nohp_settings}}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>London</h3>
                        <a href="#">
                            {{$setting->alamat_settings}}
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
    </section>


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


    <div class="map-area">
        <iframe width="300" height="170" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q={{$setting->latitude_settings}},{{$setting->longitude_settings}}&hl=id&z=14&amp;output=embed">
        </iframe>
    </div>
</x-frontend-layout>