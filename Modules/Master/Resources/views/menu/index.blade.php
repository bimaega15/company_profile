<x-backend-layout>
    @section('title','Menu Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Menu Page
                        <small class="text-muted">Management Data Menu</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add" type="button" data-url="{{ route('master.menu.create') }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('menu') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Menu</strong>
                                <small>
                                    List Data Menu
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive" id="output_tree">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="url_rendermenu" data-url="{{ route('master.menu.index') }}"></script>
    <script class="url_sortandnested" data-url="{{ route('master.menu.index') }}"></script>
    <script src="{{ asset('js/master/menu/index.js') }}"></script>
    @endpush
</x-backend-layout>