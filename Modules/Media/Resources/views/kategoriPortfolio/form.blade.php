@if (isset($kategoriPortfolio))
<form method="post" action="{{ url('media/kategoriPortfolio/'.$kategoriPortfolio->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.kategoriPortfolio.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="nama_kategori_portfolio">Kategori</label>
                <input type="text" class="form-control" id="nama_kategori_portfolio" placeholder="Kategori..." name="nama_kategori_portfolio" value="{{ isset($kategoriPortfolio) ? $kategoriPortfolio->nama_kategori_portfolio : '' }}">
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


    <script type="text/javascript" src="{{ asset('js/media/kategoriPortfolio/form.js') }}"></script>