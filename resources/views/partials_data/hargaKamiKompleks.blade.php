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
            <div class="col-lg-4 col-md-6 {{ (count(UtilsHelp::pricing()) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                <div class="single-pricing-box">
                    <h3>{{ ucwords($item->jenis_produk) }}</h3>
                    <h2 style="font-size: 25px;">Rp. {{ number_format($item->harga_produk,0,'.',',') }} <sub>/ Bulan</sub></h2>
                    {!! $item->fitur_produk !!}
                    <a href="{{ route('website.product.show', $item->id) }}" class="default-btn">
                        <span>Detail Produk</span>
                    </a>
                    <span class="quality">{{ UtilsHelp::nilaiJenisProduk($item->jenis_produk) }}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>