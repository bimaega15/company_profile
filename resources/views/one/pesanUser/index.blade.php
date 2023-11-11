<x-backend-layout>
    @section('title', 'Pesan User Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Pesan Masuk
                        <small class="text-muted">Daftar seluruh pesan masuk dalam sistem </small>
                    </h2>
                </div>
                {{-- <div class="col-lg-5 col-md-6 col-sm-12">
                    {{ Breadcrumbs::render('pesanUser') }}
                </div> --}}
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        {{-- <div class="header">
                            <h2><strong>Data Table Pesan User</strong>
                                <small>
                                    List Data Table Pesan User
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
                                        <th>Tujuan Pesan</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor Telpon</th>
                                        <th>Subject</th>
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
        <script class="url_datatable" data-url="{{ route('pesanUser.index') }}"></script>
        <script src="{{ asset('js/one/pesanUser/index.js') }}"></script>
    @endpush
</x-backend-layout>
