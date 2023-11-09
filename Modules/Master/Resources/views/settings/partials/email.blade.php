<div>
    <h6 style="text-transform: capitalize; font-size:17px;">Pengaturan Account Email</h6>
    <div style="width: 100%; height: 1px; background-color: #000; margin-bottom: 15px;"></div>
    <div class="form-group">
        <label for="">Email Address</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" name="setting_acountemail"
            placeholder="Email Pengirim..." value="{{ isset($settings) ? $settings->setting_acountemail : '' }}">
    </div>
    <div class="form-group">
        <label for="">Password</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" name="setting_acountpassword"
            placeholder="Password..." value="{{ isset($settings) ? $settings->setting_acountpassword : '' }}">
    </div>
    <div class="form-group">
        <label for="">Nama Pengirim</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" name="setting_namapengirim"
            placeholder="Nama pengirim..." value="{{ isset($settings) ? $settings->setting_namapengirim : '' }}">
    </div>
</div>
<div class="mt-4">
    <h6 style="text-transform: capitalize; font-size:17px;">Pengaturan Pesan Email</h6>
    <div style="width: 100%; height: 1px; background-color: #000; margin-bottom: 15px;"></div>
    <div class="form-group">
        <label for="">Subject</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" name="setting_subject"
            placeholder="Subject..." value="{{ isset($settings) ? $settings->setting_subject : '' }}">
    </div>
    <div class="form-group">
        <label for="">Isi Content</label>
        <textarea style="font-size: 13.5px;" class="form-control" name="setting_contentemail" placeholder="Isi Content...">{{ isset($settings) ? $settings->setting_contentemail : '' }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Text Penutup</label>
        <textarea style="font-size: 13.5px;" class="form-control" name="setting_penutupemail" placeholder="Penutup...">{{ isset($settings) ? $settings->setting_penutupemail : '' }}</textarea>
    </div>
    <div class="form-group">
        <label for="">Text Copyright</label>
        <input style="font-size: 13.5px;" type="text" class="form-control" name="setting_copyright"
            placeholder="Copyright..." value="{{ isset($settings) ? $settings->setting_copyright : '' }}">
    </div>
</div>
