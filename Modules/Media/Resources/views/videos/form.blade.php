@if (isset($videos))
<form method="post" action="{{ url('media/videos/'.$videos->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('media.videos.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group">
                <label for="judul_videos">Judul</label>
                <input type="text" class="form-control" id="judul_videos" placeholder="Judul..." name="judul_videos" value="{{ isset($videos) ? $videos->judul_videos : '' }}">
            </div>
            <div class="form-group">
                <label for="keterangan_videos">Keterangan</label>
                <textarea class="form-control" id="keterangan_videos" placeholder="Keterangan..." name="keterangan_videos">{{ isset($videos) ? $videos->keterangan_videos : '' }}</textarea>
            </div>

            <div class="form-group">
                <label for="file_videos">File Video</label>
                <input type="file" name="file_videos" class="form-control">
                @if (isset($videos))
                @if ($videos != null && $videos->file_videos != null)
                <div id="load_file_videos">
                    <video id="video-play-plugin-{{ $videos->id }}" class="video-js" controls preload="auto" poster="{{ asset('upload/poster/'.$videos->poster_videos) }}" data-setup="{}" data-id="' . $row->id . '" style="height: 200px;">
                        <source src="{{ asset('upload/videos/'.$videos->file_videos) }}" type="video/mp4">
                        </source>
                        <source src="{{ asset('upload/videos/'.$videos->file_videos) }}" type="video/webm">
                        </source>
                        <source src="{{ asset('upload/videos/'.$videos->file_videos) }}" type="video/ogg">
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
                <label for="poster_videos">Poster Video</label>
                <input type="file" name="poster_videos" class="form-control">
                @if (isset($videos))
                @if ($videos != null)
                <div id="load_poster_videos">
                    <a class="photoviewer" href="{{ asset('upload/poster/'.$videos->poster_videos) }}" data-gallery="photoviewer" data-title="{{ $videos->poster_videos }}" target="_blank">
                        <img src="{{ asset('upload/poster/'.$videos->poster_videos) }}" alt="upload gambar" height="100px" class="rounded">
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


    <script type="text/javascript" src="{{ asset('js/media/videos/form.js') }}"></script>