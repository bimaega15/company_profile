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
                                    <div class="nav flex-column nav-pills shadow-sm" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <a class="nav-link active" id="v-pills-tentang-kami-tab" data-toggle="pill" href="#v-pills-tentang-kami" role="tab" aria-controls="v-pills-tentang-kami" aria-selected="true">Tentang Kami</a>
                                        <a class="nav-link" id="v-pills-profile-singkat-tab" data-toggle="pill" href="#v-pills-profile-singkat" role="tab" aria-controls="v-pills-profile-singkat" aria-selected="false">Profile Singkat Team</a>
                                    </div>
                                </div>
                                <div class="col-lg-10">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane fade show active" id="v-pills-tentang-kami" role="tabpanel" aria-labelledby="v-pills-tentang-kami-tab">
                                            @include('web::tentangKami.partial.content')
                                        </div>
                                        <div class="tab-pane fade" id="v-pills-profile-singkat" role="tabpanel" aria-labelledby="v-pills-profile-singkat-tab">...</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-backend-layout>