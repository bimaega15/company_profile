<x-backend-layout>
    @section('title', 'Data Clients')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Clients
                        <small class="text-muted">Management Data Clients</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add"
                        type="button" data-url="{{ route('media.clients.create') }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{-- {{ Breadcrumbs::render('clients') }} --}}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        {{-- <div class="header">
                            <h2><strong>Data Table Clients</strong>
                                <small>
                                    List Data Table Clients
                                </small>
                            </h2>
                        </div> --}}
                        <div class="body table-responsive">

                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                id="dataTable"
                                style="border-left: 1px solid #D7D7D7; border-right: 1px solid #D7D7D7; border-bottom: 1px solid #D7D7D7;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Client</th>
                                        {{-- <th>PERUSAHAAN</th> --}}
                                        <th style="max-width: 30%;">Alamat</th>
                                        <th>No Handphone</th>
                                        <th>Email</th>
                                        <th>Gambar</th>
                                        <th>Aktiv</th>
                                        <th>Action</th>
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
        <script class="url_datatable" data-url="{{ route('media.clients.index') }}"></script>

        <script src="{{ asset('js/media/clients/index.js') }}"></script>
    @endpush
</x-backend-layout>
