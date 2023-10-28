<x-frontend-layout>
    @push('custom_css')
    <style>
        .btn-kategori-portfolio.active {
            background-color: #0383ff;
            border-color: transparent !important;
        }
    </style>
    @endpush
    <div class="page-title-area bg-24">
        <div class="container">
            <div class="page-title-content">
                <h2>Project</h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li class="active">Project</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <section class="services-area services-area-two bg-color pt-100 pb-70">
                    <div class="container">
                        <div class="section-title">
                            <span><b>Our Project</b></span>
                            <h3>We Are Trusted For Our Project</h3>
                            <p style="text-transform: lowercase;">
                                List of several project at our company, you can see several project
                                categories below
                                This,
                                Please choose according to what you are interested in, we will provide the best solution for you
                            </p>
                        </div>
                        <div class="row mb-5">
                            <div class="col-lg-12">
                                <div class="d-flex justify-content-center">
                                    @foreach ($kategoriPortfolio as $index => $item)
                                    <button type="button" class="btn btn-secondary me-2 btn-kategori-portfolio {{ $index == 0 ? 'active' : '' }}" data-id="{{ $item->id }}">{{$item->nama_kategori_portfolio}}</button>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                       <div id="output_portfolio"></div>
                    </div>
                </section>

            </div>
        </div>
    </div>

    @push('custom_js')
    <script class="url_data_portfolio" data-url="{{ route('website.project.index') }}"></script>
    <script src="{{ asset('js/website/project/index.js') }}"></script>
    @endpush

</x-frontend-layout>