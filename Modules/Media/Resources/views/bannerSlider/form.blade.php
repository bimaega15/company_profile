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

            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="deskripsi_bannerslider">Jenis Data</label> <br>
                        @foreach ($jenisDataSlider as $index => $item)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenisdata_bannerslider" id="jenisdata_bannerslider{{$index}}" value="{{$item}}">
                            <label class="form-check-label" for="jenisdata_bannerslider{{$index}}">
                                {{$item}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="deskripsi_bannerslider">Jenis Banner</label> <br>
                        @foreach ($jenisBannerSlider as $index => $item)
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis_bannerslider" id="jenis_bannerslider{{$index}}" value="{{$item}}">
                            <label class="form-check-label" for="jenis_bannerslider{{$index}}">
                                {{$item}}
                            </label>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="load_single_gambar">
                <div class="form-group">
                    <label for="">Gambar</label>
                    <select name="gambar_gallery" class="form-control select2" id="">
                        <option value="">-- Pilih Gambar --</option>
                    </select>
                </div>
            </div>
            <div id="load_multiple_gambar">
                <div class="form-group">
                    <label for="">Pilih Beberapa Gambar</label>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableGalleryGambar">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Gambar</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div id="load_single_video">
                <div class="form-group">
                    <label for="">Video</label>
                    <select name="file_videos" class="form-control select2" id="">
                        <option value="">-- Pilih Video --</option>
                    </select>
                </div>
            </div>
            <div id="load_multiple_video">
                <div class="form-group">
                    <label for="">Pilih Beberapa Video</label>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="tableGalleryVideo">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>No.</th>
                                    <th>Judul</th>
                                    <th>Keterangan</th>
                                    <th>Video</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="">Status Banner</label>
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