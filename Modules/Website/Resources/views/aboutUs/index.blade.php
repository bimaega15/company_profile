<x-frontend-layout>

    <section class="banner-area bg-hal-about jarallax" data-jarallax="{&quot;speed&quot;: 0.3}">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <div class="banner-content">
                                {{-- <span class="top-title wow animate__animated animate__fadeInDown" data-wow-delay="1s">Home
                                    / Our Executives</span> --}}
                                <h2 style="font-size:40px;" class="wow animate__animated animate__fadeInDown"
                                    data-wow-delay="1s">Transportation and Logistics</h2>
                                <p class="wow animate__animated animate__fadeInLeft" data-wow-delay="1s">We are a
                                    privately owned Indonesian company, established in Jakarta - Indonesia in March 2009
                                    with a focus on liquid transportation using ISO-Tanks and Flexibags. With years of
                                    experience in the industry, we have dedicated ourselves to provide the best
                                    service/products to our customers.
                                </p>
                                <div class="banner-btn wow animate__animated animate__fadeInUp" data-wow-delay="1s">
                                    <a style="border-radius: 7px;" href="{{ url('/website/contactUs') }}"
                                        class="default-btn">
                                        <span>Contact Us</span>
                                    </a>
                                    {{-- <a href="contact-us.html" class="default-btn active">
                                        <span>Contact Us</span>
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3">
                            <div class="video-btn-2 wow animate__animated animate__zoomIn" data-wow-delay="1s">
                                <a href="https://www.youtube.com/watch?v=tEV5sXt6pV8" class="popup-youtube">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <i class="flaticon-play-button"></i>
                                </a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="page-title-area bg-1">
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
    </div> --}}


    @include('partials_data.aboutUs')

    @include('partials_data.counter')

    @include('partials_data.mengapaMilihKami')

    @include('partials_data.kirimPesan')

    @include('partials_data.testimoni')

    @include('partials_data.shipment')

    @include('partials_data.timKami')

    @include('partials_data.client')
</x-frontend-layout>
