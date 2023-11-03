@push('custom_css')
<style>
    .img-produk {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        border: 3px solid #a19f9f;
        box-shadow: 4px 4px 10px rgba(0, 0, 0, 0.5);
    }
</style>
@endpush
<section class="feature-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach (UtilsHelp::pricing() as $item)
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature-box">
                    <div class="d-flex justify-content-center align-items-center p-2">
                        <img src="{{ asset('upload/iconProduk/'.$item->icon_produk) }}" alt="{{ $item->icon_produk }}" class="img-produk">
                    </div>
                    <h3 class="mt-3">{{ strtoupper($item->kategori_produk) }}</h3>
                    {!! $item->deskripsisingkat_produk !!}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>