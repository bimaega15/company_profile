<div class="partner-area bg-color ptb-70">
    <div class="container">
        <div class="row">
            <div class="partner-slider owl-carousel owl-theme">
                @foreach (UtilsHelp::client() as $item)
                <div class="partner-item">
                    <a href="#">
                        <img data-cfsrc="{{ asset('upload/clients/'.$item->gambar_clients) }}" alt="Image" style="display:none;visibility:hidden; height: 120px;"><noscript><img src="{{ asset('upload/clients/'.$item->gambar_clients) }}" alt="Image" style="height: 120px;"></noscript>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>