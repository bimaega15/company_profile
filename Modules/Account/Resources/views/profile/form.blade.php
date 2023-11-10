<style>
    label {
        font-size: 14px;
    }

    input {
        font-size: 13.5px;
    }
</style>
@if (isset($profile))
    <form method="post" action="{{ url('account/profile/' . $profile->users_id . '?_method=put') }}" id="form-submit">
    @else
        <form method="post" action="{{ route('account.profile.store') }}" id="form-submit">
@endif
<x-modal.modal-body>
    <input type="hidden" name="id" value="{{ isset($profile) ? $profile->id : '' }}">
    <input type="hidden" name="password_old" value="{{ isset($profile) ? $profile->users->password : '' }}">
    <div class="form-group">
        <label for="email_profile" style="font-size: 14px;">Email</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" id="email_profile" placeholder="Email..."
            name="email_profile" value="{{ isset($profile) ? $profile->email_profile : '' }}">
    </div>
    <div class="form-group">
        <label for="password" style="font-size: 14px;">Password</label>
        <input style="font-size: 13.5px;" type="password" class="form-control" id="password" placeholder="Password..."
            name="password" value="">
    </div>
    <div class="form-group">
        <label for="password">Konfirmasi Password</label>
        <input style="font-size: 13.5px;" type="password" class="form-control" id="password_confirm"
            placeholder="Konfirmasi Password..." name="password_confirm" value="">
    </div>
    <div class="form-group">
        <label for="nik_profile">NIK</label>
        <input style="font-size: 13.5px;" type="number" class="form-control" id="nik_profile" placeholder="NIK..."
            name="nik_profile" value="{{ isset($profile) ? $profile->nik_profile : '' }}">
    </div>
    <div class="form-group">
        <label for="nama_profile">Nama</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" id="nama_profile" placeholder="NIK..."
            name="nama_profile" value="{{ isset($profile) ? $profile->nama_profile : '' }}">
    </div>
    <div class="form-group">
        <label for="nohp_profile">No. Handphone</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" id="nohp_profile"
            placeholder="No. handphone..." name="nohp_profile"
            value="{{ isset($profile) ? $profile->nohp_profile : '' }}">
    </div>

    <div class="form-group">
        <label for="alamat_profile">Alamat</label>
        <textarea style="font-size: 13.5px;" class="form-control" id="alamat_profile" placeholder="Alamat..."
            name="alamat_profile">{{ isset($profile) ? $profile->alamat_profile : '' }}</textarea>
    </div>
    <div class="form-group">
        <label for="jenis_kelamin_profile">Jenis Kelamin</label> <br>
        <div class="form-check form-check-inline">
            <input style="font-size: 13.5px;" class="form-check-input" type="radio" name="jeniskelamin_profile"
                id="jeniskelamin_profilel" value="L"
                {{ isset($profile) ? ($profile->jeniskelamin_profile == 'L' ? 'checked' : '') : '' }}>
            <label class="form-check-label" for="jeniskelamin_profilel">Laki-laki</label>
        </div>
        <div class="form-check form-check-inline">
            <input style="font-size: 13.5px;" class="form-check-input" type="radio" name="jeniskelamin_profile"
                id="jeniskelamin_profilep" value="P"
                {{ isset($profile) ? ($profile->jeniskelamin_profile == 'P' ? 'checked' : '') : '' }}>
            <label class="form-check-label" for="jeniskelamin_profilep">Perempuan</label>
        </div>
    </div>
    <div class="form-group">
        <label for="gambar_profile">Gambar</label>
        <input type="file" name="gambar_profile" class="form-control">
        @if (isset($profile))
            @if ($profile != null)
                <div id="load_profile">
                    <a class="photoviewer" href="{{ asset('upload/profile/' . $profile->gambar_profile) }}"
                        data-profile="photoviewer" data-title="{{ $profile->gambar_profile }}" target="_blank">
                        <img src="{{ asset('upload/profile/' . $profile->gambar_profile) }}" alt="upload gambar"
                            height="100px" class="rounded">
                    </a>
                </div>
            @endif
        @endif
    </div>
</x-modal.modal-body>
<x-modal.modal-footer>
    <div class="form-group d-flex justify-content-right" style="width: 100%;">
        <button type="button" class="btn btn-secondary d-flex align-items-left justify-content-center mr-2"
            data-dismiss="modal" style="font-size: 14px; border-radius: 5px;">
            <i class="zmdi zmdi-close mr-1" style="font-size: 15px;"></i>&nbsp; Close
        </button>
        <button style="font-size: 14px; border-radius: 5px;" type="submit" class="btn btn-primary mr-2"
            id="btn_submit"><i class="zmdi zmdi-save" style="font-size: 15px;"></i>&nbsp;
            Simpan</button>
    </div>
</x-modal.modal-footer>
</form>


<script type="text/javascript" src="{{ asset('js/account/profile/form.js') }}"></script>
