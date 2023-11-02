<x-modal.modal-body>
    <form method="post" action="{{ url('myProfile/'.$profile->users_id.'/update?_method=put') }}" id="form-submit">
        <x-modal.modal-body>
            <input type="hidden" name="id" value="{{ isset($profile) ? $profile->id : '' }}">
            <input type="hidden" name="password_old" value="{{ isset($profile) ? $profile->users->password : '' }}">
            <div class="form-group">
                <label for="email_profile">Email</label>
                <input type="text" class="form-control" id="email_profile" placeholder="Email..." name="email_profile" value="{{ isset($profile) ? $profile->email_profile : '' }}">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password..." name="password" value="">
            </div>
            <div class="form-group">
                <label for="password">Konfirmasi Password</label>
                <input type="password" class="form-control" id="password_confirm" placeholder="Konfirmasi Password..." name="password_confirm" value="">
            </div>
            <div class="form-group">
                <label for="nik_profile">NIK</label>
                <input type="number" class="form-control" id="nik_profile" placeholder="NIK..." name="nik_profile" value="{{ isset($profile) ? $profile->nik_profile : '' }}">
            </div>
            <div class="form-group">
                <label for="nama_profile">Nama</label>
                <input type="text" class="form-control" id="nama_profile" placeholder="NIK..." name="nama_profile" value="{{ isset($profile) ? $profile->nama_profile : '' }}">
            </div>
            <div class="form-group">
                <label for="nohp_profile">No. Handphone</label>
                <input type="text" class="form-control" id="nohp_profile" placeholder="No. handphone..." name="nohp_profile" value="{{ isset($profile) ? $profile->nohp_profile : '' }}">
            </div>

            <div class="form-group">
                <label for="alamat_profile">Alamat</label>
                <textarea class="form-control" id="alamat_profile" placeholder="Alamat..." name="alamat_profile">{{ isset($profile) ? $profile->alamat_profile : '' }}</textarea>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin_profile">Jenis Kelamin</label> <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin_profile" id="jeniskelamin_profilel" value="L" {{ isset($profile) ? $profile->jeniskelamin_profile == 'L' ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="jeniskelamin_profilel">Laki-laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jeniskelamin_profile" id="jeniskelamin_profilep" value="P" {{ isset($profile) ? $profile->jeniskelamin_profile == 'P' ? 'checked' : '' : '' }}>
                    <label class="form-check-label" for="jeniskelamin_profilep">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="gambar_profile">Gambar</label>
                <input type="file" name="gambar_profile" class="form-control">
                @if (isset($profile))
                @if ($profile != null)
                <div id="load_profile">
                    <a class="photoviewer" href="{{ asset('upload/profile/'.$profile->gambar_profile) }}" data-profile="photoviewer" data-title="{{ $profile->gambar_profile }}" target="_blank">
                        <img src="{{ asset('upload/profile/'.$profile->gambar_profile) }}" alt="upload gambar" height="100px" class="rounded">
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

</x-modal.modal-body>

<script src="{{ asset('js/one/myProfile/form.js') }}"></script>