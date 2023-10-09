@if (isset($portfolio))
<form method="post" action="{{ url('media/portfolio/'.$portfolio->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.portfolio.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="judul_projects">Judul</label>
                <input type="text" class="form-control" id="judul_projects" placeholder="Judul..." name="judul_projects" value="{{ isset($portfolio) ? $portfolio->judul_projects : '' }}">
            </div>
            <div class="form-group">
                <label for="keterangan_projects">Keterangan</label>
                <textarea class="form-control" id="keterangan_projects" placeholder="Keterangan..." name="keterangan_projects">{{ isset($portfolio) ? $portfolio->keterangan_projects : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="keterangan_projects">Gambar</label>
                <input type="file" name="gambar_projects" class="form-control">
                @if (isset($portfolio))
                @if ($portfolio != null)
                <div id="load_portfolio">
                    <a class="photoviewer" href="{{ asset('upload/projects/'.$portfolio->gambar_projects) }}" data-gallery="photoviewer" data-title="{{ $portfolio->gambar_projects }}" target="_blank">
                        <img src="{{ asset('upload/projects/'.$portfolio->gambar_projects) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
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


    <script type="text/javascript" src="{{ asset('js/media/portfolio/form.js') }}"></script>