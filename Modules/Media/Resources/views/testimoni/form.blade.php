@if (isset($testimoni))
<form method="post" action="{{ url('media/testimoni/'.$testimoni->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.testimoni.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="nama_testimoni">Nama</label>
                <input type="text" class="form-control" id="nama_testimoni" placeholder="Judul..." name="nama_testimoni" value="{{ isset($testimoni) ? $testimoni->nama_testimoni : '' }}">
            </div>
            <div class="form-group">
                <label for="posisi_testimoni">Posisi</label>
                <input type="text" class="form-control" id="posisi_testimoni" placeholder="Judul..." name="posisi_testimoni" value="{{ isset($testimoni) ? $testimoni->posisi_testimoni : '' }}">
            </div>
            <div class="form-group">
                <label for="judul_testimoni">Judul</label>
                <input type="text" class="form-control" id="judul_testimoni" placeholder="Judul..." name="judul_testimoni" value="{{ isset($testimoni) ? $testimoni->judul_testimoni : '' }}">
            </div>
            <div class="form-group">
                <label for="pesan_testimoni">Pesan</label>
                <textarea class="form-control" id="pesan_testimoni" placeholder="Pesan Testimoni..." name="pesan_testimoni">{{ isset($testimoni) ? $testimoni->pesan_testimoni : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_testimoni">Gambar</label>
                <input type="file" name="gambar_testimoni" class="form-control">
                @if (isset($testimoni))
                @if ($testimoni != null)
                <div id="load_testimoni">
                    <a class="photoviewer" href="{{ asset('upload/testimoni/'.$testimoni->gambar_testimoni) }}" data-testimoni="photoviewer" data-title="{{ $testimoni->gambar_testimoni }}" target="_blank">
                        <img src="{{ asset('upload/testimoni/'.$testimoni->gambar_testimoni) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>
            <div class="form-group" id="rating_testimoni">
                <label for="rating_testimoni">Rating</label>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="is_active" {{ isset($testimoni) ? $testimoni->is_active != null ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="is_active"> Apakah Testimoni Aktif ?
                    </label>
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

    <script class="data_rating_testimoni" data-rating_testimoni="{{ isset($testimoni) ? $testimoni->rating_testimoni : '' }}"></script>
    <script type="text/javascript" src="{{ asset('js/media/testimoni/form.js') }}"></script>