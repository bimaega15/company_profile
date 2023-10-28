<x-backend-layout>
    @section('title','Data Faq')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data Faq
                        <small class="text-muted">Management Data Faq</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-add" type="button" data-url="{{ route('web.faq.create') }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('faq') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Table Faq</strong>
                                <small>
                                    List Data Table Faq
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script src="{{ asset('js/web/faq/index.js') }}"></script>
    @endpush
</x-backend-layout>