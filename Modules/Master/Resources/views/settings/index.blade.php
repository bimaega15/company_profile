<x-backend-layout>
    @section('title','Settings Page')
    <section class="content">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Settings Page
                        <small class="text-muted">Management Data Settings</small>
                    </h2>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    {{ Breadcrumbs::render('settings') }}
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12">

                    <div class="card">
                        <div class="header">
                            <h2><strong>Form Settings</strong>
                                <small>
                                    Data Settings
                                </small>
                            </h2>
                        </div>
                        <div class="body table-responsive">
                            @if ($settings != null)
                            <form method="post" action="{{ url('master/settings/'.$settings->id.'?_method=put') }}" id="form-submit">
                                @else
                                <form method="post" action="{{ route('master.settings.store') }}" id="form-submit">
                                    @endif
                                    <x-modal.modal-body>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="logo_settings">Logo Perusahaan</label>
                                                    <input type="file" class="form-control" name="logo_settings">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="icon_settings">Icon Perusahaan</label>
                                                    <input type="file" class="form-control" name="icon_settings">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="nama_settings">Nama Perusahaan</label>
                                                    <input type="text" class="form-control" name="nama_settings" placeholder="Nama perusahaan...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="alamat_settings">Alamat</label>
                                                    <textarea name="alamat_settings" class="form-control" placeholder="Alamat perusahaan..."></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="deskripsi_settings">Deskripsi</label>
                                                    <textarea name="deskripsi_settings" class="form-control" placeholder="Deskripsi..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="bahasa_settings">Bahasa</label>
                                                    <select name="bahasa_settings" class="form-control" id="">
                                                        <option value="">-- Pilih Bahasa --</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="zonawaktu_settings">Zona Waktu</label>
                                                    <select name="zonawaktu_settings" class="form-control" id="">
                                                        <option value="">-- Pilih Zona Waktu --</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="nohp_settings">No. Handphone</label>
                                                    <input type="text" class="form-control" name="nohp_settings" placeholder="No. Handphone...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="email_settings">Email</label>
                                                    <input type="text" class="form-control" name="email_settings" placeholder="Email...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="facebook_settings">Facebook</label>
                                                    <input type="text" class="form-control" name="facebook_settings" placeholder="Facebook...">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="instagram_settings">Instagram</label>
                                                    <input type="text" class="form-control" name="instagram_settings" placeholder="Instagram...">
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="form-group">
                                                    <label for="linkedin_settings">Linked IN</label>
                                                    <input type="text" class="form-control" name="linkedin_settings" placeholder="Linked IN...">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="whatsapp_settings">Whats App</label>
                                                    <input type="text" class="form-control" name="whatsapp_settings" placeholder="Whats App...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="youtube_settings">Youtube</label>
                                                    <input type="text" class="form-control" name="youtube_settings" placeholder="Youtube...">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="longitude_settings">Longitude</label>
                                                    <input type="text" class="form-control" name="longitude_settings" placeholder="Longitude...">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="latitude_settings">Latitude</label>
                                                    <input type="text" class="form-control" name="latitude_settings" placeholder="Latitude...">
                                                </div>
                                            </div>
                                        </div>

                                    </x-modal.modal-body>

                                    <x-modal.modal-footer>
                                        <div class="form-group d-flex">
                                            <button type="button" class="btn btn-secondary d-flex align-items-center justify-content-center mr-2" data-dismiss="modal">
                                                <i class="zmdi zmdi-close mr-1"></i> Close
                                            </button>
                                            <button type="submit" class="btn btn-primary mr-2" id="btn_submit"><i class="zmdi zmdi-mail-send mr-1"></i>
                                                Simpan</button>
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
    <script src="{{ asset('js/master/settings/index.js') }}"></script>
    @endpush
</x-backend-layout>