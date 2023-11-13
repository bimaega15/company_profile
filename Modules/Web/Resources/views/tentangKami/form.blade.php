<div class="card shadow">
    <div class="card-header">
        <i class="zmdi zmdi-format-list-bulleted"></i> Data Visi Misi
    </div>
    <div class="body">
        <div class="card shadow-sm">
            {{-- <div class="header">
                <h2><strong>Form Settings</strong>
                    <small>
                        Data Settings
                    </small>
                </h2>
            </div> --}}
            <div class="body table-responsive" style="margin-top:-30px;">
                @if ($tentangKami != null)
                    <form method="post" action="{{ url('web/tentangKami/' . $tentangKami->id . '?_method=put') }}"
                        id="form-submit">
                    @else
                        <form method="post" action="{{ route('web.tentangKami.store') }}" id="form-submit">
                @endif
                <x-modal.modal-body>
                    <div class="form-group">
                        <label for="sejarah_tentangkami">Sejarah Perusahaan</label>
                        <textarea name="sejarah_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->sejarah_tentangkami : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="visimisi_tentangkami">Visi Misi / Tentang Kami</label>
                        <textarea name="visimisi_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->visimisi_tentangkami : '' }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="nilainilai_tentangkami">Nila nilai inti</label>
                        <textarea name="nilainilai_tentangkami" class="form-control" placeholder="Sejarah perusahaan...">{{ isset($tentangKami) ? $tentangKami->nilainilai_tentangkami : '' }}</textarea>
                    </div>
                </x-modal.modal-body>

                <x-modal.modal-footer>
                    <div class="form-group d-flex justify-content-right" style="width: 100%;">
                        <button type="button"
                            class="btn btn-secondary d-flex align-items-left justify-content-center mr-2"
                            data-dismiss="modal" style="font-size: 14px; border-radius: 5px;">
                            <i class="zmdi zmdi-close mr-1" style="font-size: 15px;"></i>&nbsp; Close
                        </button>
                        <button style="font-size: 14px; border-radius: 5px;" type="submit" class="btn btn-primary mr-2"
                            id="btn_submit"><i class="zmdi zmdi-save" style="font-size: 15px;"></i>&nbsp;
                            Simpan</button>
                    </div>
                </x-modal.modal-footer>
                </form>
            </div>
        </div>
    </div>
</div>



<script class="url_tentang_kami" data-url="{{ route('web.tentangKami.checkData') }}"></script>
<script class="root_asset" data-url="{{ asset('/') }}"></script>
<script src="{{ asset('js/web/tentangKami/form.js') }}"></script>
