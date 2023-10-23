@if (isset($produk))
<form method="post" action="{{ url('web/produk/'.$produk->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.produk.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="">Jenis produk</label>
                <select name="jenis_produk" class="form-control select2" id="" style="width: 100%;">
                    <option value="">-- Pilih Jenis Produk --</option>
                    @foreach ($jenisProduk as $item)
                    <option value="{{ $item }}" {{ isset($produk) ? $produk->jenis_produk == $item ? 'selected' : '' : '' }}>{{ ucwords($item) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_produk">Nama Produk</label>
                <input type="text" class="form-control" id="nama_produk" placeholder="Nama Produk..." name="nama_produk" value="{{ isset($produk) ? $produk->nama_produk : '' }}">
            </div>
            <div class="form-group">
                <label for="harga_produk">Harga</label>
                <input type="text" class="form-control" id="harga_produk" placeholder="Harga..." name="harga_produk" value="{{ isset($produk) ? $produk->harga_produk : '' }}">
            </div>
            <div class="form-group">
                <label for="keterangan_produk">Keterangan</label>
                <textarea name="keterangan_produk" class="form-control" placeholder="Keterangan...">{{ isset($produk) ? $produk->keterangan_produk : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="fitur_produk">Fitur</label>
                <textarea name="fitur_produk" class="form-control" placeholder="Fitur...">{{ isset($produk) ? $produk->fitur_produk : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="layanan_produk">Layanan</label>
                <textarea name="layanan_produk" class="form-control" placeholder="Layanan...">{{ isset($produk) ? $produk->layanan_produk : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_produk">Gambar</label>
                <input type="file" name="gambar_produk" class="form-control">
                @if (isset($produk))
                @if ($produk != null)
                <div id="load_produk">
                    <a class="photoviewer" href="{{ asset('upload/produk/'.$produk->gambar_produk) }}" data-produk="photoviewer" data-title="{{ $produk->gambar_produk }}" target="_blank">
                        <img src="{{ asset('upload/produk/'.$produk->gambar_produk) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
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
    <script src="{{ asset('js/web/produk/form.js') }}"></script>