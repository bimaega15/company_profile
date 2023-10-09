<div class="card shadow-sm">
    <div class="header">
        <h2><strong>Form Settings</strong>
            <small>
                Data Settings
            </small>
        </h2>
    </div>
    <div class="body table-responsive">
        @if ($tentangKami != null)
        <form method="post" action="{{ url('web/tentangKami/'.$tentangKami->id.'?_method=put') }}" id="form-submit">
            @else
            <form method="post" action="{{ route('web.tentangKami.store') }}" id="form-submit">
                @endif
                <x-modal.modal-body>
                    <div class="form-group">
                        <label for="sejarah_tentangkami">Sejarah Perusahaan</label>
                        <textarea name="sejarah_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->sejarah_tentangkami : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="visimisi_tentangkami">Visi Misi Kami</label>
                        <textarea name="visimisi_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->visimisi_tentangkami : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nilainilai_tentangkami">Nila nilai inti</label>
                        <textarea name="nilainilai_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->nilainilai_tentangkami : '' }}</textarea>
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
    </div>
</div>

@push('custom_js')
<script class="url_tentang_kami" data-url="{{ route('web.tentangKami.checkData') }}"></script>
<script class="root_asset" data-url="{{ asset('/') }}"></script>
<script src="{{ asset('js/web/tentangKami/index.js') }}"></script>
@endpush