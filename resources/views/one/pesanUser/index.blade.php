<x-backend-layout>
    @section('title','Pesan User Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Pesan User Page
                        <small class="text-muted">Management Data Pesan User</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    {{ Breadcrumbs::render('pesanUser') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Table Pesan User</strong>
                                <small>
                                    List Data Table Pesan User
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">

                            <table class="table" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>NO</th>
                                        <th>TUJUAN</th>
                                        <th>NAMA</th>
                                        <th>EMAIL</th>
                                        <th>NO. HANDPHONE</th>
                                        <th>SUBJECT</th>
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
    <script class="url_datatable" data-url="{{ route('pesanUser.index') }}"></script>
    <script src="{{ asset('js/one/pesanUser/index.js') }}"></script>
    @endpush
</x-backend-layout>