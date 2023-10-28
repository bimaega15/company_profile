@if (isset($gallery))
<form method="post" action="{{ url('media/gallery/'.$gallery->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.gallery.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="judul_gallery">Judul</label>
                <input type="text" class="form-control" id="judul_gallery" placeholder="Judul..." name="judul_gallery" value="{{ isset($gallery) ? $gallery->judul_gallery : '' }}">
            </div>
            <div class="form-group">
                <label for="keterangan_gallery">Keterangan</label>
                <textarea class="form-control" id="keterangan_gallery" placeholder="Keterangan..." name="keterangan_gallery">{{ isset($gallery) ? $gallery->keterangan_gallery : '' }}</textarea>
            </div>

            v
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


    <script type="text/javascript" src="{{ asset('js/media/gallery/form.js') }}"></script>