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
<section class="pricing-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Harga Kami</span>
            <h2>Semua paket harga dan semua detail lainnya</h2>
            <p>Daftar product harga pada perusahaan kami, Dibawah ini ada kelas-kelas product nya silahkan anda pilih sesuai dengan kebutuhan, dan jangan ragu untuk menghubungi kontak kami jika ada yang ingin ditanyakan.
            </p>
        </div>
        <div class="row">
            @foreach (UtilsHelp::pricing() as $index => $item)
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature-box">
                    <div class="d-flex justify-content-center align-items-center p-2">
                        <img src="{{ asset('upload/iconProduk/'.$item->icon_produk) }}" alt="{{ $item->icon_produk }}" class="img-produk">
                    </div>
                    <h3 class="mt-3">{{ strtoupper($item->kategori_produk) }}</h3>
                    {!! $item->deskripsisingkat_produk !!}
                    <a href="{{ route('website.product.show', $item->id) }}" class="text-primary font-weight-bold">
                        Read More...
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>