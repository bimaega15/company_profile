<x-backend-layout>
    @section('title', 'Data Faq')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Data FAQ
                        <small class="text-muted">Management Data Faq</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button
                        class="btn btn-primary btn-form-faq btn-icon btn-round hidden-sm-down float-right m-l-10 
                    @if ($faq != null) btn-edit
                    @else
                    btn-add @endif"
                        type="button"
                        data-url="
                    @if ($faq != null) {{ route('web.faq.edit', $faq->id) }}
                    @else
                    {{ route('web.faq.create') }} @endif
                    "
                        data-id="
                    @if ($faq != null) {{ $faq->id }}
                    @else @endif
                    ">
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
                            <div id="output_faq"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
        <script class="url_faq" data-url="{{ route('web.faq.index') }}"></script>
        <script class="url_faq_getData" data-url="{{ route('web.faq.getData') }}"></script>
        <script class="root_form" data-url="{{ url('/') }}"></script>

        <script src="{{ asset('js/web/faq/index.js') }}"></script>
    @endpush
</x-backend-layout>
