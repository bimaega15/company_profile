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
            <ul id="output_form_faq">
                @if (isset($faq))
                <?php
                foreach ($contentFaq as $key => $value) {
                    if (strpos($key, '_sub') === false) {
                        // Ini adalah kategori FAQ
                        $countFaq = explode('-', $key);
                        $faqCount = $countFaq[1] - 1;

                        echo '<ul class="faq-item">';
                        echo '<li>';
                        echo '<div class="row">';
                        echo '<div class="col-lg-10">';
                        echo '<div class="form-group">';
                        echo '<label for="faq-' . $faqCount . '">Kategori</label>';
                        echo '
                                                <button class="btn btn-danger delete-kategori p-0" type="button" style="border-radius: 50%; width: 30px; height: 30px; margin-top: 5px; margin-left: 10px;">
                                                    <i class="zmdi zmdi-delete"></i>
                                                </button>
                                                ';
                        echo '<input type="text" class="form-control" id="faq-' . $faqCount . '" placeholder="Kategori" value="' . $value . '">';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="col-lg-2">';
                        echo '<button class="btn btn-primary btn-add-subfaq p-0" type="button" style="border-radius: 50%; width: 30px; height: 30px; margin-top: 38px;">';
                        echo '<i class="zmdi zmdi-plus"></i>';
                        echo '</button>';
                        echo '</div>';
                        echo '</div>';
                        echo '</li>';
                        echo '<li>';
                        echo '<ul class="subfaq-list">';
                    } else {
                        // Ini adalah subkategori FAQ
                        foreach ($value as $index => $subfaq) {
                            echo '<li>';
                            echo '<div class="row">';
                            echo '<div class="col-lg-10">';
                            echo '<div class="form-group">';
                            echo '<label for="subfaq-' . $index . '">Data Faq</label>';
                            echo '<input type="text" class="form-control"  id="subfaq-' . $index . '" placeholder="' . $subfaq . '" value="' . $subfaq . '">';
                            echo '</div>';
                            echo '</div>';
                            echo '<div class="col-lg-2">';
                            echo '<button class="btn btn-danger btn-delete-subfaq p-0" type="button" style="border-radius: 50%; width: 30px; height: 30px; margin-top: 40px;">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>';
                            echo '</div>';
                            echo '<div>';
                            echo '</li>';
                        }
                        echo '</ul>';

                        echo '</li>';
                        echo '</ul>';
                    }
                }
                ?>
                @endif
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