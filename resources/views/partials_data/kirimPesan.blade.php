<section class="track-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12">
                <section class="main-contact-area ptb-100">
                    <div class="container">
                        <div class="section-title">
                            <h2>Kirim pesan kepada kami, untuk pesan apapun</h2>
                        </div>
                        <form id="contactForm" action="{{ route('website.contactUs.store') }}" method="post">
                            <div class="row">
                                <div class="col-lg-12 col-sm-6 mb-4">
                                    <div class="form-group">
                                        <select name="role_id" id="name" class="form-control" required data-error="Isi Tujuan Pesan">
                                            <option value="">-- Pilih Tujuan --</option>
                                            @foreach (UtilsHelp::roles() as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="nama_kirimpesan" id="name" class="form-control" required data-error="Isi nama anda" placeholder="Nama">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="email" name="email_kirimpesan" id="email" class="form-control" required data-error="Isi Email anda" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="nohandphone_kirimpesan" id="phone_number" required data-error="Isi no. telepon anda" class="form-control" placeholder="No. handphone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" name="subject_kirimpesan" id="msg_subject" class="form-control" required data-error="Isi subjek pesan anda" placeholder="Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="pesan_kirimpesan" class="form-control" id="message" cols="30" rows="10" required data-error="Isi pesan anda" placeholder="Pesan"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group checkboxs">
                                        <input type="checkbox" id="chb2" name="accepts_kirimpesan" required>
                                        <p>
                                            Accept <a href="{{ url('website/terms') }}">Terms & Conditions</a> And <a href="{{ url('website/privacyPolicy') }}">Privacy Policy.</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="default-btn btn-two" id="btn-submit-kirimpesan">
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

@push('custom_js')
<script src="{{ asset('js/kirimpesan/index.js') }}"></script>
@endpush