@if (isset($faq))
<form method="post" action="{{ url('web/faq/'.$faq->id.'?_method=put') }}" id="form-submit">
    @else
    <form method="post" action="{{ route('web.faq.store') }}" id="form-submit">
        @endif
        <x-modal.modal-body>
            <div class="form-group mb-4">
                <button class="btn btn-primary btn-add-faq" type="button">
                    <i class="zmdi zmdi-plus"></i> Tambah FAQ
                </button>
            </div>
            <ul>
                <li>
                    <div class="form-group">
                        <label for="">Kategori FAQ</label>
                        <input type="text" class="form-control" placeholder="Kategori FAQ">
                    </div>
                </li>
                <li>
                    <ul>
                        <li>
                            <div class="form-group">
                                <label for="">Sub Kategori FAQ</label>
                                <input type="text" class="form-control" placeholder="Sub Kategori FAQ">
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Sub Kategori FAQ</label>
                                <input type="text" class="form-control" placeholder="Sub Kategori FAQ">
                            </div>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="form-group">
                        <label for="">Kategori FAQ</label>
                        <input type="text" class="form-control" placeholder="Kategori FAQ">
                    </div>
                </li>
                <li>
                    <ul>
                        <li>
                            <div class="form-group">
                                <label for="">Sub Kategori FAQ</label>
                                <input type="text" class="form-control" placeholder="Sub Kategori FAQ">
                            </div>
                        </li>
                        <li>
                            <div class="form-group">
                                <label for="">Sub Kategori FAQ</label>
                                <input type="text" class="form-control" placeholder="Sub Kategori FAQ">
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>

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
    <script src="{{ asset('js/web/faq/form.js') }}"></script>