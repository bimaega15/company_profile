{{-- @push('custom_css')
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
</section> --}}
<section class="feature-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature-box">
                    <i class="flaticon-fast-delivery-1"></i>
                    <h3>FLEXITANK</h3>
                    <p>FlexiTank is one of the innovative packaging product for cost-effective liquid transportation.
                        and eliminate the risk of cross contamination
                    </p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single-feature-box">
                    <i class="flaticon-boat"></i>
                    <h3>ISO TANK</h3>
                    <p>PT Megaduta Artha Megah provide Iso Tank Containter Services. Iso Tank
                        was certified by International Standard Organization.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0">
                <div class="single-feature-box">
                    <i class="flaticon-fast-delivery-1"></i>
                    <h3>TRUCKING</h3>
                    <p>Having a highly motivated and dedicated team, as well as reliable land transportation partners
                        who have experience in
                        various multimodal fields.</p>
                </div>
            </div>
        </div>
    </div>
</section>
