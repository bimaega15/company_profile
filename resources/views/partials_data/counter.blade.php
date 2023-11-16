{{-- @push('custom_css')
<style>
    .single-counter img {
        width: 150px !important;
        height: 150px !important;
    }
</style>
@endpush
<section class="counter-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="row">
            @foreach (UtilsHelp::counterData() as $item)
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-counter">
                    <a href="{{ asset('upload/counterData/'.$item->gambar_counterdata) }}" target="_blank">
                        <img src="{{ asset('upload/counterData/'.$item->gambar_counterdata) }}" alt="{{ $item->gambar_counterdata }}" class="rounded-circle" style="width: 150px; height: 150px;">
                    </a>
                    <h2 class="mt-2">
                        <span class="odometer" data-count="{{$item->jumlah_counterdata}}">00</span>
                        <span class="target">+</span>
                    </h2>
                    <p>{{ $item->nama_counterdata }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section> --}}
