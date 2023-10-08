<x-backend-layout>
    @section('title','Data Gallery')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Gallery
                        <small class="text-muted">Management Data Gallery</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add" type="button" data-url="{{ route('media.gallery.create') }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('gallery') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Table Gallery</strong>
                                <small>
                                    List Data Table Gallery
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>JUDUL</th>
                                        <th>WAKTU</th>
                                        <th>GAMBAR</th>
                                        <th>USERS</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="url_datatable" data-url="{{ route('media.gallery.index') }}"></script>

    <script src="{{ asset('js/media/gallery/index.js') }}"></script>
    @endpush
</x-backend-layout>