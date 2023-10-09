<x-backend-layout>
    @section('title','Data Portfolio')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Portfolio
                        <small class="text-muted">Management Data Portfolio</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add" type="button" data-url="{{ route('media.portfolio.create') }}" data-kategori_portfolio_id="">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('portfolio') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Table Portfolio</strong>
                                <small>
                                    List Data Table Portfolio
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                @foreach ($kategori_portfolio as $index => $item)
                                <li class="nav-item"><a class="nav-link tab_click {{$index == 0 ? 'active' : ''}}" data-toggle="tab" href="#{{ str_replace(' ', '_', strtolower($item->nama_kategori_portfolio)) }}" data-kategori_portfolio_id="{{ $item->id }}">{{ $item->nama_kategori_portfolio }}</a></li>
                                @endforeach
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                @foreach ($kategori_portfolio as $index => $item)
                                <div role="tabpanel" class="tab-pane tabe_display in {{$index == 0 ? 'active' : ''}}" id="{{ str_replace(' ', '_', strtolower($item->nama_kategori_portfolio)) }}" data-kategori_portfolio_id="{{ $item->id }}">
                                    <hr />
                                    <div class="row mt-4">
                                        <div class="col-lg-12">
                                            <table class="table" id="dataTable_{{$index}}" style="width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>JUDUL</th>
                                                        <th>WAKTU</th>
                                                        <th>GAMBAR</th>
                                                        <th>USERS</th>
                                                        <th>KATEGORI</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="url_datatable" data-url="{{ url('media/portfolio') }}"></script>
    <script class="encode_kategori" data-kategori_portfolio="{{ $kategori_portfolio_encode }}"></script>

    <script src="{{ asset('js/media/portfolio/index.js') }}"></script>
    @endpush
</x-backend-layout>