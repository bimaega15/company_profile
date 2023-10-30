@if (isset($service))
<form method="post" action="{{ url('web/service/'.$service->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.service.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="judul_service">Nama Pelayanan</label>
                <input type="text" class="form-control" id="judul_service" placeholder="Nama pelayanan..." name="judul_service" value="{{ isset($service) ? $service->judul_service : '' }}">
            </div>
            <div class="form-group">
                <label for="deskripsi_service">Deskripsi</label>
                <input type="text" class="form-control" id="deskripsi_service" placeholder="Deskripsi..." name="deskripsi_service" value="{{ isset($service) ? $service->deskripsi_service : '' }}">
            </div>
            <div class="form-group">
                <label for="konten_service">Konten</label>
                <input type="text" class="form-control" id="konten_service" placeholder="Konten..." name="konten_service" value="{{ isset($service) ? $service->konten_service : '' }}">
            </div>
            <div class="form-group">
                <label for="waktu_service">Waktu</label>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Dari Hari</label>
                            <select name="dari_hari" class="form-control select2" id="">
                                <option value="">-- Pilih Hari --</option>
                                @foreach ($jenisHari as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                            <label for="">Sampai Hari</label>
                            <select name="sampai_hari" class="form-control select2" id="">
                                <option value="">-- Pilih Hari --</option>
                                @foreach ($jenisHari as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Mulai Pelayanan</label>
                                    <input type="text" name="waktu_mulai" class="form-control mulai_pelayanan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Akhir Pelayanan</label>
                                    <input type="text" name="waktu_akhir" class="form-control akhir_pelayanan">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Dari Hari</label>
                            <select name="dari_hari" class="form-control select2" id="">
                                <option value="">-- Pilih Hari --</option>
                                @foreach ($jenisHari as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Mulai Pelayanan</label>
                                    <input type="text" name="waktu_mulai" class="form-control mulai_pelayanan">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="">Akhir Pelayanan</label>
                                    <input type="text" name="waktu_akhir" class="form-control akhir_pelayanan">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Dari Hari</label>
                            <select name="dari_hari" class="form-control select2" id="">
                                <option value="">-- Pilih Hari --</option>
                                @foreach ($jenisHari as $key => $item)
                                <option value="{{ $key }}">{{ $item }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="">Status Hari</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="is_holiday">
                                <label class="form-check-label" for="is_holiday">
                                    Apakah ini hari libur?
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="gambar_service">Gambar</label>
                <input type="file" name="gambar_service" class="form-control">
                @if (isset($service))
                @if ($service != null)
                <div id="load_service">
                    <a class="photoviewer" href="{{ asset('upload/service/'.$service->gambar_service) }}" data-service="photoviewer" data-title="{{ $service->gambar_service }}" target="_blank">
                        <img src="{{ asset('upload/service/'.$service->gambar_service) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>
        </x-modal.modal-body>

        <x-modal.modal-footer>
            <div class="form-group d-flex">
                <button type="reset" class="btn btn-secondary d-flex align-items-center justify-content-center mr-2" data-dismiss="modal">
                    <i class="zmdi zmdi-close mr-1"></i> Close
                </button>
                <button type="submit" class="btn btn-primary mr-2" id="btn_submit"><i class="zmdi zmdi-mail-send mr-1"></i>
                    Simpan</button>
            </div>
        </x-modal.modal-footer>
    </form>
    <script src="{{ asset('js/web/service/form.js') }}"></script>