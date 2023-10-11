@if (isset($kategoriBerita))
<form method="post" action="{{ url('web/kategoriBerita/'.$kategoriBerita->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.kategoriBerita.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="nama_kategoriberita">Kategori Berita</label>
                <input type="text" class="form-control" id="nama_kategoriberita" placeholder="Kategori Berita..." name="nama_kategoriberita" value="{{ isset($kategoriBerita) ? $kategoriBerita->nama_kategoriberita : '' }}">
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

    <script class="url_parent_id" data-parent_id="{{ isset($parentStatis) ? $parentStatis->parentid_datastatis : '' }}" data-parent_name="{{ isset($parentStatis) ? $parentStatis->nama_datastatis : '' }}"></script>

    <script type="text/javascript" src="{{ asset('js/web/kategoriBerita/form.js') }}"></script>