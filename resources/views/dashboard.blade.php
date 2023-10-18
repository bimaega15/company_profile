<x-backend-layout>
    @section('title', 'Dashboard Page')

    <section class="content home">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Dashboard
                        <small class="text-muted">Welcome to Compass</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10" type="button">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    <ul class="breadcrumb float-md-right">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Compass</a></li>
                        <li class="breadcrumb-item active">Dashboard 1</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Dashboard</strong> Report</h2>
                        </div>
                        <div class="body">
                            <div class="row text-center">
                                <h3>Selamat Datang di halaman Dashboard</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-backend-layout>