@if (isset($profileSingkat))
<form method="post" action="{{ url('web/profileSingkat/'.$profileSingkat->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.profileSingkat.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <input type="hidden" name="tentang_kami_id" value="{{ $tentang_kami_id }}">
            <div class="form-group">
                <label for="nama_tentangdetail">Nama</label>
                <input type="text" class="form-control" id="nama_tentangdetail" placeholder="Nama..." name="nama_tentangdetail" value="{{ isset($profileSingkat) ? $profileSingkat->nama_tentangdetail : '' }}">
            </div>
            <div class="form-group">
                <label for="posisi_tentangdetail">Posisi</label>
                <input type="text" class="form-control" id="posisi_tentangdetail" placeholder="Posisi..." name="posisi_tentangdetail" value="{{ isset($profileSingkat) ? $profileSingkat->posisi_tentangdetail : '' }}">
            </div>
            <div class="form-group">
                <label for="judul_tentangdetail">Judul</label>
                <input type="text" class="form-control" id="judul_tentangdetail" placeholder="Judul..." name="judul_tentangdetail" value="{{ isset($profileSingkat) ? $profileSingkat->judul_tentangdetail : '' }}">
            </div>
            <div class="form-group">
                <label for="pesan_tentangdetail">Pesan</label>
                <textarea class="form-control" id="pesan_tentangdetail" placeholder="Pesan ..." name="pesan_tentangdetail">{{ isset($profileSingkat) ? $profileSingkat->pesan_tentangdetail : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_tentangdetail">Gambar</label>
                <input type="file" name="gambar_tentangdetail" class="form-control">
                @if (isset($profileSingkat))
                @if ($profileSingkat != null)
                <div id="load_profileSingkat">
                    <a class="photoviewer" href="{{ asset('upload/profilesingkat/'.$profileSingkat->gambar_tentangdetail) }}" data-profileSingkat="photoviewer" data-title="{{ $profileSingkat->gambar_tentangdetail }}" target="_blank">
                        <img src="{{ asset('upload/profilesingkat/'.$profileSingkat->gambar_tentangdetail) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="is_active" {{ isset($profileSingkat) ? $profileSingkat->is_active != null ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="is_active"> Apakah Profile Singkat Aktif ?
                    </label>
                </div>
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
    <script class="root_asset" data-url="{{ asset('/') }}"></script>
    <script src="{{ asset('js/web/profileSingkat/form.js') }}"></script>