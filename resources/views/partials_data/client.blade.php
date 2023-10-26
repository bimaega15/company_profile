<div class="partner-area bg-color ptb-70">
    <div class="about-content">
        <h3 style="text-align: center">Companies that Have Trusted Megaduta</h3>
    </div>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="partner-slider owl-carousel owl-theme">
                @foreach (UtilsHelp::client() as $item)
                    <div class="partner-item">
                        <a href="#">
                            <img data-cfsrc="{{ asset('upload/clients/' . $item->gambar_clients) }}" alt="Image"
                                style="display:none;visibility:hidden; height: 75px;"><noscript><img
                                    src="{{ asset('upload/clients/' . $item->gambar_clients) }}" alt="Image"
                                    style="height: 75px;"></noscript>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
