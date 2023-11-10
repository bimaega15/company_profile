<style>
    label {
        font-size: 14px;
        font-weight: bold;
    }

    p {
        font-size: 14px;
    }
</style>
<x-modal.modal-body>
    <div class="form-group row">
        <div class="col-lg-4">
            <label for="">Tujuan Pesan</label>
        </div>
        <div class="col-lg-8">
            <p class="p-0 m-0">: {{ $kirimPesan->roleId->name }}</p>
        </div>
    </div>
    <div class="form-group row">
        <div class="col-lg-4">

            <label for="">Nama Pengirim</label>
        </div>
        <div class="col-lg-8">

            <p class="p-0 m-0">: {{ $kirimPesan->nama_kirimpesan }}</p>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">

            <label for="">Email</label>
        </div>
        <div class="col-lg-8">

            <p class="p-0 m-0">: {{ $kirimPesan->email_kirimpesan }}</p>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">

            <label for="">No. Handphone</label>
        </div>
        <div class="col-lg-8">

            <p class="p-0 m-0">: {{ $kirimPesan->nohandphone_kirimpesan }}</p>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">

            <label for="">Subject</label>
        </div>
        <div class="col-lg-8">

            <p class="p-0 m-0">: {{ $kirimPesan->subject_kirimpesan }}</p>
        </div>

    </div>
    <div class="form-group row">
        <div class="col-lg-4">

            <label for="">Isi Pesan</label>
        </div>
        <div class="col-lg-8">

            <p class="p-0 m-0">: {{ $kirimPesan->pesan_kirimpesan }}</p>
        </div>

    </div>
</x-modal.modal-body>
<x-modal.modal-footer>

    <hr>
    <div class="form-group d-flex">
        <button style="font-size: 14px;" type="button"
            class="btn btn-secondary d-flex align-items-center justify-content-center mr-2" data-dismiss="modal">
            <i class="zmdi zmdi-close mr-1" style="font-size: 15px;"></i> Close
        </button>
    </div>
</x-modal.modal-footer>
