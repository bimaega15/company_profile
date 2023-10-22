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