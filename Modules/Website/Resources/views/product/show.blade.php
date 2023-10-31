<x-frontend-layout>
    <div class="page-title-area bg-18">
        <div class="container">
            <div class="page-title-content">
                <h2>Product Details</h2>
                <ul>
                    <li>
                        <a href="{{ url('/') }}">
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('website/product') }}">
                            Product
                        </a>
                    </li>
                    <li class="active">Product Details</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="product-details-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-image">
                        <img data-cfsrc="{{ asset('upload/produk/'.$produk->gambar_produk) }}" alt="Image" style="display:none;visibility:hidden; border-radius:10px;"><noscript><img src="{{ asset('upload/produk/'.$produk->gambar_produk) }}" alt="{{$produk->gambar_produk}}"></noscript>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="product-details-desc">
                        <h3>{{ $produk->nama_produk }}</h3>
                        <span class="quality badge bg-info">{{ UtilsHelp::nilaiJenisProduk($produk->jenis_produk) }}</span>
                        <div class="price">
                            <span class="new-price">Rp. {{ number_format($produk->harga_produk,0,'.',',') }}</span>
                        </div>
                        {!! $produk->keterangan_produk !!}
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="tab products-details-tab">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <ul class="tabs active">
                                    <li class="current">
                                        <a href="#">
                                            Fitur Produk
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="#">
                                            Layanan Produk
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="tab_content">
                                    <div class="tabs_item" style="">
                                        <div class="products-details-tab-content">
                                            <h3 class="mb-2">Fitur</h3>
                                            {!! $produk->fitur_produk !!}
                                        </div>
                                    </div>
                                    <div class="tabs_item" style="display: none;">
                                        <div class="products-details-tab-content">
                                            <h3 class="mb-2">Layanan</h3>
                                            {!! $produk->layanan_produk !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-layout>