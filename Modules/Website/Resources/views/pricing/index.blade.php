<x-frontend-layout>
    <div class="page-title-area bg-3">
        <div class="container">
            <div class="page-title-content">
                <h2>Pricing Style One</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">Pricing Style One</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="pricing-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>Harga Kami</span>
                <h2>Semua paket harga dan semua detail lainnya</h2>
                <p>Daftar product harga pada perusahaan kami, Dibawah ini ada kelas-kelas product nya silahkan anda pilih sesuai dengan kebutuhan, dan jangan ragu untuk menghubungi kontak kami jika ada yang ingin ditanyakan.
                </p>
            </div>
            <div class="row">
                @foreach ($pricing as $index => $item)
                <div class="col-lg-4 col-md-6 {{ (count($pricing) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                    <div class="single-pricing-box">
                        <h3>Starter</h3>
                        <h2>$20 <sub>Monthly</sub></h2>
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
                        <a href="#" class="default-btn">
                            <span>Start This Plan</span>
                        </a>
                        <span class="quality">Good</span>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="choose-us-area bg-color pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
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
                <div class="col-lg-6">
                    <div class="choose-us-img">
                        <img data-cfsrc="assets/img/choose-us-img.jpg" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="assets/img/choose-us-img.jpg" alt="Image"></noscript>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>