@if (isset($berita))
<form method="post" action="{{ url('web/berita/'.$berita->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.berita.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>

            <div class="form-group">
                <label for="kategori_berita_id">Kategori Berita</label>
                <select name="kategori_berita_id" class="form-control select2" id="" style="width: 100%;">
                    <option value="">-- Kategori Berita --</option>
                    @foreach ($kategoriBerita as $item)
                    <option value="{{ $item->id }}" {{ isset($berita) ? ($berita->kategori_berita_id == $item->id ? 'selected' : '') : ''}}>{{ $item->nama_kategoriberita }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tanggalpublish_berita">Tanggal Publish</label>
                <input type="text" class="form-control datetimepicker" id="tanggalpublish_berita" placeholder="Tanggal Publish..." name="tanggalpublish_berita" value="{{ isset($berita) ? $berita->tanggalpublish_berita : '' }}">
            </div>

            <div class="form-group">
                <label for="judul_berita">Judul Berita</label>
                <input type="text" class="form-control" id="judul_berita" placeholder="Judul Berita..." name="judul_berita" value="{{ isset($berita) ? $berita->judul_berita : '' }}">
            </div>
            <div class="form-group">
                <label for="isi_berita">Isi Berita</label>
                <textarea class="form-control" id="isi_berita" placeholder="Isi Berita..." name="isi_berita">{{ isset($berita) ? $berita->isi_berita : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="gambar_berita">Gambar</label>
                <input type="file" name="gambar_berita" class="form-control">
                @if (isset($berita))
                @if ($berita != null)
                <div id="load_berita">
                    <a class="photoviewer" href="{{ asset('upload/gambarberita/'.$berita->gambar_berita) }}" data-berita="photoviewer" data-title="{{ $berita->gambar_berita }}" target="_blank">
                        <img src="{{ asset('upload/gambarberita/'.$berita->gambar_berita) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>

            <div class="form-group">
                <label for="video_berita">Video Berita</label>
                <input type="file" name="video_berita" class="form-control">
                @if (isset($berita))
                @if ($berita != null && $berita->video_berita != null)
                <div id="load_video_berita">
                    <video id="video-play-plugin-{{ $berita->id }}" class="video-js" controls preload="auto" poster="{{ asset('upload/postervideoberita/'.$berita->postervideo_berita) }}" data-setup="{}" data-id="' . $row->id . '" style="height: 200px;">
                        <source src="{{ asset('upload/videoberita/'.$berita->video_berita) }}" type="video/mp4">
                        </source>
                        <source src="{{ asset('upload/videoberita/'.$berita->video_berita) }}" type="video/webm">
                        </source>
                        <source src="{{ asset('upload/videoberita/'.$berita->video_berita) }}" type="video/ogg">
                        </source>
                        <p class="vjs-no-js">
                            To view this video please enable JavaScript, and consider upgrading to a
                            web browser that
                            <a href="https://videojs.com/html5-video-support/" target="_blank">
                                supports HTML5 video
                            </a>
                        </p>
                    </video>
                </div>
                @endif
                @endif
            </div>

            <div class="form-group">
                <label for="postervideo_berita">Poster Video Berita</label>
                <input type="file" name="postervideo_berita" class="form-control">
                @if (isset($berita))
                @if ($berita != null)
                <div id="load_postervideo_berita">
                    <a class="photoviewer" href="{{ asset('upload/postervideoberita/'.$berita->postervideo_berita) }}" data-gallery="photoviewer" data-title="{{ $berita->postervideo_berita }}" target="_blank">
                        <img src="{{ asset('upload/postervideoberita/'.$berita->postervideo_berita) }}" alt="upload gambar" height="100px" class="rounded">
                    </a>
                </div>
                @endif
                @endif
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input name="isactive_berita" class="form-check-input" type="checkbox" value="1" id="isactive_berita" {{ isset($berita) ? $berita->isactive_berita != null ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="isactive_berita"> Apakah Berita ini Aktif ?
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

    <script class="data_video_berita" data-berita="{{ isset($berita) ? $berita->video_berita : '' }}"></script>
    <script type="text/javascript" src="{{ asset('js/web/berita/form.js') }}"></script>