<x-backend-layout>
    @section('title','Data Tentang Kami')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Tentang Kami
                        <small class="text-muted">Management Data Tentang Kami</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add" type="button" data-url="{{ route('web.tentangKami.create') }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('tentangKami') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Tentang Kami</strong> - Kelola Tentang Kami</h2>
                        </div>
                        <div class="body">
                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="card shadow">
                                        <div class="card-header">
                                            <i class="zmdi zmdi-filter-list"></i> Filter Data
                                        </div>
                                        <div class="body">
                                            <div class="d-flex flex-column">
                                                <div>
                                                    <button class="w-100 btn btn-primary btn-tab-data" data-view="tentang_kami">
                                                        TENTANG KAMI
                                                    </button>
                                                </div>
                                                <div>
                                                    <button class="w-100 btn btn-light btn-tab-data" data-view="profile_singkat">
                                                        PROFILE SINGKAT TIM
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div id="output_menu">
                                        <div class="card shadow">
                                            <div class="card-header">
                                                <i class="zmdi zmdi-format-list-bulleted"></i> Data Visi Misi
                                            </div>
                                            <div class="body">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="url_view_tentangkami" data-url="{{ route('web.tentangKami.create') }}"></script>
    <script class="url_view_profilesingkat" data-url="{{ route('web.profileSingkat.index') }}"></script>
    <script src="{{ asset('js/web/tentangKami/index.js') }}"></script>
    @endpush
</x-backend-layout>