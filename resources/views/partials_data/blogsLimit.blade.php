<section class="services-area services-area-two bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span><b>Our Activities and CSR</b></span>
            <h3>Corporate Social Responsibility</h3>

        </div>
        <div class="row">
            @foreach (UtilsHelp::blogsLimit() as $index => $item)
                <div
                    class="col-lg-4 col-md-6 {{ count(UtilsHelp::blogsLimit()) - 1 == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                    <div class="single-blog-post"
                        style="border-top-left-radius: 14px; border-top-right-radius:14px; border-bottom-left-radius:14px; border-bottom-right-radius:14px;">
                        <div class="post-image">
                            <a href="{{ route('website.blogs.show', $item->id) }}">
                                <img style="border-top-left-radius: 14px; border-top-right-radius:14px;"
                                    data-cfsrc="{{ asset('upload/gambarberita/' . $item->gambar_berita) }}"
                                    alt="{{ $item->gambar_berita }}"
                                    style="display:none;visibility:hidden;height: 330px;"><noscript><img
                                        src="{{ asset('upload/gambarberita/' . $item->gambar_berita) }}"
                                        alt="{{ $item->gambar_berita }}"></noscript>
                            </a>
                        </div>
                        <div class="blog-content">
                            <div class="date">
                                <i class="bx bx-calendar"></i>
                                <span>{{ UtilsHelp::tanggalBulanTahunKonversi($item->tanggalpublish_berita) }}</span>
                            </div>
                            <h3>
                                <a style="font-size: 18px;"
                                    href="{{ route('website.blogs.show', $item->id) }}">{{ $item->judul_berita }}</a>
                            </h3>
                            {{-- <p>{!! UtilsHelp::limitTextGlobal($item->isi_berita, 140) !!}</p> --}}
                            {{-- <a style="border-radius: 7px;" href="{{ route('website.blogs.show', $item->id) }}"
                                class="default-btn">
                                <span>Read More</span>
                            </a> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="track-area ptb-100 jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="tab quote-list-tab">
                    <ul class="tabs">

                        <li>
                            <a href="#">
                                Tracking Order
                                <i class="flaticon-location"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="tab_content">
                        <!-- <div class="tabs_item">
                                <form>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Personal Data</h3>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Your Phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <h3>Shipment Data</h3>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <select>
                                                    <option value="1">Type of flight One</option>
                                                    <option value="2">Type of flight Two</option>
                                                    <option value="0">Type of flight Three</option>
                                                    <option value="3">Type of flight Four</option>
                                                    <option value="4">Type of flight Five</option>
                                                    <option value="5">Type of flight Six</option>
                                                    <option value="6">Type of flight Seven</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="City of Departure">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Which City">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-6">
                                            <div class="form-group">
                                                <select>
                                                    <option value="1">Incomers One</option>
                                                    <option value="2">Incomers Two</option>
                                                    <option value="0">Incomers Three</option>
                                                    <option value="3">Incomers Four</option>
                                                    <option value="4">Travel Insurance Five</option>
                                                    <option value="5">Incomers Six</option>
                                                    <option value="6">Incomers Seven</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="width">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Height">
                                            </div>
                                        </div>
                                        <div class="col-lg-2 col-sm-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="weight">
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Length">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <label class="single-check">
                                                Express Delivery
                                                <input type="radio" checked="checked" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <label class="single-check">
                                                Ocean Freight
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <label class="single-check">
                                                Road Freight
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 col-sm-6 col-md-3">
                                            <label class="single-check">
                                                Air Freight
                                                <input type="radio" name="radio">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="default-btn">
                                                Request A Quote
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div> -->
                        <div class="tabs_item">
                            <form>
                                <div class="row">
                                    <div class="col-12">
                                        <h3>Type Services</h3>
                                        <div class="form-group">
                                            <select>
                                                <option value="1">Flexi Tank</option>
                                                <option value="2">Iso Tank</option>
                                                <option value="0">Trucking</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-30">
                                        <h3>Tracking Number</h3>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="You can enter up to a maximum of 10 airway bill numbers for tracking."></textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Express Delivery
                                            <input type="radio" checked="checked" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Ocean Freight
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Road Freight
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="col-lg-3 col-sm-6 col-md-3">
                                        <label class="single-check">
                                            Air Freight
                                            <input type="radio" name="radio">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="col-12">
                                    <button type="submit" class="default-btn">
                                        Track Delivery
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
