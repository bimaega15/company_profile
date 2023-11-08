<x-backend-layout>
    @section('title', 'Settings Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Settings Sistem
                        <small class="text-muted">Management Data Settings</small>
                    </h2>
                </div>
                {{-- <div class="col-lg-5 col-md-6 col-sm-12">
                    {{ Breadcrumbs::render('settings') }}
                </div> --}}
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        {{-- <div class="header">
                            <h2><strong>Form Settings</strong>
                                <small>
                                    Data Settings
                                </small>
                            </h2>
                        </div> --}}
                        <div class="body table-responsive">
                            @if ($settings != null)
                                <form method="post"
                                    action="{{ url('master/settings/' . $settings->id . '?_method=put') }}"
                                    id="form-submit">
                                @else
                                    <form method="post" action="{{ route('master.settings.store') }}" id="form-submit">
                            @endif
                            <x-modal.modal-body>

                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs" role="tablist" style="margin-left: -14px; margin-top: -20px;">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                            href="#general_setting"> Pengaturan Umum
                                        </a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#email_setting">
                                            Pengaturan Email
                                        </a>
                                    </li>
                                </ul>
                                <br>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane in active" id="general_setting">
                                        @include('master::settings.partials.umum')
                                    </div>
                                    <div role="tabpanel" class="tab-pane" id="email_setting">
                                        @include('master::settings.partials.email')
                                    </div>
                                </div>
                            </x-modal.modal-body>
                            <x-modal.modal-footer>
                                <div class="form-group d-flex justify-content-right" style="width: 100%;">
                                    <button type="reset"
                                        class="btn btn-secondary d-flex align-items-center justify-content-center mr-1"
                                        data-dismiss="modal" style="font-size: 14px; border-radius: 5px;">
                                        <i class="zmdi zmdi-close" style="font-size: 15px;"></i> &nbsp; Batal
                                    </button>
                                    <button type="submit" class="btn btn-primary mr-2" id="btn_submit"
                                        style="font-size: 14px; border-radius: 5px;">
                                        <i class="zmdi zmdi-save" style="font-size: 15px;"></i> &nbsp;Simpan</button>
                                </div>
                            </x-modal.modal-footer>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('custom_js')
        <script class="url_datastatis_zonawaktu" data-url="{{ route('master.dataStatis.parentStatis') }}"
            data-jenisreferensi_datastatis="zona_waktu"></script>
        <script class="url_settings" data-url="{{ route('master.settings.checkData') }}"></script>
        <script class="url_root" data-url="{{ url('/') }}"></script>
        <script class="zona_waktu" data-zonawaktu_settings_id="{{ isset($zonawaktu_settings) ? $zonawaktu_settings->id : '' }}"
            data-zonawaktu_settings_nama="{{ isset($zonawaktu_settings) ? $zonawaktu_settings->nama_datastatis : '' }}">
        </script>
        <script src="{{ asset('js/master/settings/index.js') }}"></script>
    @endpush
</x-backend-layout>
