@if (isset($bannerSlider))
<form method="post" action="{{ url('media/bannerSlider/'.$bannerSlider->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.bannerSlider.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="judul_bannerslider">Judul</label>
                <input type="text" class="form-control" id="judul_bannerslider" placeholder="Judul..." name="judul_bannerslider" value="{{ isset($bannerSlider) ? $bannerSlider->judul_bannerslider : '' }}">
            </div>
            <div class="form-group">
                <label for="singkat_bannerslider">Ringkasan</label>
                <textarea class="form-control" id="singkat_bannerslider" placeholder="Keterangan..." name="singkat_bannerslider">{{ isset($bannerSlider) ? $bannerSlider->singkat_bannerslider : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="deskripsi_bannerslider">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_bannerslider" placeholder="Keterangan..." name="deskripsi_bannerslider">{{ isset($bannerSlider) ? $bannerSlider->deskripsi_bannerslider : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="deskripsi_bannerslider">Gambar</label>
                <input type="file" name="deskripsi_bannerslider" class="form-control">
                @if (isset($bannerSlider))
                @if ($bannerSlider != null)
                <div id="load_bannerSlider">
                    <a class="photoviewer" href="{{ asset('upload/banner_slider/'.$bannerSlider->file_bannerslider) }}" data-banner_slider="photoviewer" data-title="{{ $bannerSlider->file_bannerslider }}" target="_blank">
                        <img src="{{ asset('upload/banner_slider/'.$bannerSlider->file_bannerslider) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="aktif_bannerslider" class="form-check-input" type="checkbox" value="1" id="aktif_bannerslider" {{ isset($bannerSlider) ? $bannerSlider->aktif_bannerslider != null ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="aktif_bannerslider"> Apakah Banner Aktif ?
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


    <script type="text/javascript" src="{{ asset('js/media/bannerSlider/form.js') }}"></script>