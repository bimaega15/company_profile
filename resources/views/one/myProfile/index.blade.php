<x-backend-layout>
    @section('title','My Profile Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>My Profile Page
                        <small class="text-muted">Management Data My Profile</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon btn-round hidden-sm-down float-right m-l-10 btn-edit" type="button" data-id="{{ UtilsHelp::myProfile()->profile->id }}" data-url="{{ route('myProfile.edit', UtilsHelp::myProfile()->profile->id) }}">
                        <i class="zmdi zmdi-plus"></i>
                    </button>
                    {{ Breadcrumbs::render('myProfile') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Data Table My Profile</strong>
                                <small>
                                    List Data Table My Profile
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            <div id="output_data"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
    <script class="url_myprofile" data-url="{{ route('myProfile.index') }}"></script>
    <script src="{{ asset('js/one/myProfile/index.js') }}"></script>
    @endpush
</x-backend-layout>