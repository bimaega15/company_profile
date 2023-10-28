@if (isset($counterData))
<form method="post" action="{{ url('master/counterData/'.$counterData->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('master.counterData.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="nama_counterdata">Nama</label>
                <input type="text" class="form-control" id="nama_counterdata" placeholder="Nama..." name="nama_counterdata" value="{{ isset($counterData) ? $counterData->nama_counterdata : '' }}">
            </div>
            <div class="form-group">
                <label for="jumlah_counterdata">Jumlah</label>
                <input type="text" class="form-control" id="jumlah_counterdata" placeholder="Jumlah..." name="jumlah_counterdata" value="{{ isset($counterData) ? $counterData->jumlah_counterdata : '' }}">
            </div>
            <div class="form-group">
                <label for="gambar_counterdata">Gambar</label>
                <input type="file" name="gambar_counterdata" class="form-control">
                @if (isset($counterData))
                @if ($counterData != null)
                <div id="load_counterData">
                    <a class="photoviewer" href="{{ asset('upload/counterData/'.$counterData->gambar_counterdata) }}" data-counterData="photoviewer" data-title="{{ $counterData->gambar_counterdata }}" target="_blank">
                        <img src="{{ asset('upload/counterData/'.$counterData->gambar_counterdata) }}" alt="upload gambar" height="100px" class="rounded">
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


    <script type="text/javascript" src="{{ asset('js/master/counterData/form.js') }}"></script>