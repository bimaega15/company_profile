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
                <div class="col-lg-5 col-md-6 col-sm-12">
                    {{ Breadcrumbs::render('dashboard') }}

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
                                    <h5 class="m-t-0">Postingan</h5>
                                    <p class="text-small">Lihat postingan</p>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">20</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">Berita</h5>
                                    <p class="text-small">Lihat Berita</p>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">39</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="39" aria-valuemin="0" aria-valuemax="100" style="width: 39%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">Visitor</h5>
                                    <p class="text-small">Total Visitor</p>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">{{ $totalKunjungan }}</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-3 col-md-6 col-sm-12">
                        <div class="body">
                            <div class="row">
                                <div class="col-7">
                                    <h5 class="m-t-0">Pesan</h5>
                                    <p class="text-small">Pesan Diterima</p>
                                </div>
                                <div class="col-5 text-right">
                                    <h2 class="">10</h2>
                                </div>
                                <div class="col-12">
                                    <div class="progress m-t-20">
                                        <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card visitors-map">
                        <div class="header">
                            <h2><strong>Statistik</strong> Pengunjung</h2>
                            <ul class="header-dropdown">
                                <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                    <ul class="dropdown-menu dropdown-menu-right slideUp">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                                <li class="remove">
                                    <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="world-map-markers" class="jvector-map m-b-5"></div>
                            <div class="row clearfix">
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from america</span>
                                        <div class="progress">
                                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from Canada</span>
                                        <div class="progress">
                                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from asia</span>
                                        <div class="progress">
                                            <div class="progress-bar l-blue" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from america</span>
                                        <div class="progress">
                                            <div class="progress-bar l-salmon" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from Canada</span>
                                        <div class="progress">
                                            <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-6">
                                    <div class="progress-container m-b-20">
                                        <span class="progress-badge">visitor from asia</span>
                                        <div class="progress">
                                            <div class="progress-bar l-amber" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%;">
                                                <span class="progress-value">86%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Pengguna </strong> Browser</h2>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                            <table class="table m-t-15 m-b-0">
                                <tbody>
                                    <tr>
                                        <td>Chrome</td>
                                        <td>6985</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Other</td>
                                        <td>2697</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Safari</td>
                                        <td>3597</td>
                                        <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Firefox</td>
                                        <td>2145</td>
                                        <td><i class="zmdi zmdi-caret-up text-success"></i></td>
                                    </tr>
                                    <tr>
                                        <td>Opera</td>
                                        <td>1854</td>
                                        <td><i class="zmdi zmdi-caret-down text-danger"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-backend-layout>