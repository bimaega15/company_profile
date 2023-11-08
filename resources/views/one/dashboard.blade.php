<x-backend-layout>
    @section('title', 'Dashboard Page')

    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard
                        <small class="text-muted">Selamat datang di halaman Dashboard</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12" style="font-size: 14px;">
                    {{-- {{ Breadcrumbs::render('dashboard') }} --}}

                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="card widget_2">
                <ul class="row clearfix list-unstyled m-b-0">
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0" style="font-size: 19.5px;">Produk</h5>
                                    <a href="{{ url('/web/produk') }}">
                                        <p class="text-small" style="color:#757575;">Lihat Produk</p>
                                    </a>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{ $countProduk }}</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0" style="font-size: 19.5px;">Berita</h5>
                                    <a href="{{ url('/web/berita') }}">
                                        <p class="text-small" style="color:#757575;">Lihat Berita</p>
                                    </a>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{ $countBerita }}</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0" style="font-size: 19.5px;">Visitor</h5>
                                    <p class="text-small" style="color:#757575;">Total Visitor</p>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{ $totalKunjungan }}</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0" style="font-size: 19.5px;">Pesan</h5>
                                    <a href="{{ url('/pesanUser') }}">
                                        <p class="text-small" style="color:#757575;">Lihat Pesan</p>
                                    </a>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{ $countPesan }}</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="100"
                                            aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="header">
                            <font style="font-size: 15px; text-transform: capitalize;"><b
                                    style="color: #2AC6D2;">Statistik</b>
                                <font style="color: #757575;"> Pengunjung</font>
                            </font>
                        </div>
                        <div class="body">
                            <div id="area_chart" class="graph"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <font style="font-size: 15px; text-transform: capitalize;"><b
                                    style="color: #2AC6D2;">Statistik</b>
                                <font style="color: #757575;"> Browser</font>
                            </font>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                            <table class="table m-t-15 m-b-0">
                                <tbody>
                                    @foreach ($browserCounts as $index => $item)
                                        <tr>
                                            <td>{{ $item->browser_visitbrowsers }}</td>
                                            <td>{{ $item->jumlah_browservisitbrowsers }}</td>
                                            <td>
                                                <div
                                                    style="width: 15px; height: 15px; background-color: {{ $color[$index] }}">
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
        <script class="url_grafik" data-url="{{ route('dashboard') }}"></script>
        <script src="{{ asset('js/dashboard/index.js') }}"></script>
    @endpush
</x-backend-layout>
