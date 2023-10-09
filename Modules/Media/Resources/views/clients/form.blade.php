@if (isset($clients))
<form method="post" action="{{ url('media/clients/'.$clients->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.clients.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="nama_clients">Client</label>
                <input type="text" class="form-control" id="nama_clients" placeholder="Judul..." name="nama_clients" value="{{ isset($clients) ? $clients->nama_clients : '' }}">
            </div>
            <div class="form-group">
                <label for="perusahaan_clients">Perusahaan</label>
                <input type="text" class="form-control" id="perusahaan_clients" placeholder="Judul..." name="perusahaan_clients" value="{{ isset($clients) ? $clients->perusahaan_clients : '' }}">
            </div>
            <div class="form-group">
                <label for="alamat_clients">Alamat</label>
                <textarea class="form-control" id="alamat_clients" placeholder="Keterangan..." name="alamat_clients">{{ isset($clients) ? $clients->alamat_clients : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="nohandphone_clients">No. Handphone</label>
                <input type="text" class="form-control" id="nohandphone_clients" placeholder="Judul..." name="nohandphone_clients" value="{{ isset($clients) ? $clients->nohandphone_clients : '' }}">
            </div>
            <div class="form-group">
                <label for="email_clients">Email</label>
                <input type="text" class="form-control" id="email_clients" placeholder="Judul..." name="email_clients" value="{{ isset($clients) ? $clients->email_clients : '' }}">
            </div>
            <div class="form-group">
                <label for="deskripsi_clients">Deskripsi</label>
                <textarea class="form-control" id="deskripsi_clients" placeholder="Keterangan..." name="deskripsi_clients">{{ isset($clients) ? $clients->deskripsi_clients : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_clients">Gambar</label>
                <input type="file" name="gambar_clients" class="form-control">
                @if (isset($clients))
                @if ($clients != null)
                <div id="load_clients">
                    <a class="photoviewer" href="{{ asset('upload/clients/'.$clients->gambar_clients) }}" data-clients="photoviewer" data-title="{{ $clients->gambar_clients }}" target="_blank">
                        <img src="{{ asset('upload/clients/'.$clients->gambar_clients) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="is_active" class="form-check-input" type="checkbox" value="1" id="is_active" {{ isset($clients) ? $clients->is_active != null ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="is_active"> Apakah Client Aktif ?
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


    <script type="text/javascript" src="{{ asset('js/media/clients/form.js') }}"></script>