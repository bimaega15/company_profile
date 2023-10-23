<section class="team-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span>Tim Kami</span>
            <h2>
                Membutuhkan support atau bantuan lainnya? Hubungi Tim Kami
            </h2>
        </div>
        <div class="row">
            @foreach (UtilsHelp::aboutUsDetailKompleks() as $index => $item)
            <div class="col-lg-4 col-md-6 {{ (count(UtilsHelp::aboutUsDetailKompleks()) - 1) == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                <div class="single-team-member">
                    <img data-cfsrc="{{ asset('upload/profilesingkat/'. $item->gambar_tentangdetail) }}" alt="Image" style="display:none;visibility:hidden;"><noscript><img src="{{ asset('upload/profilesingkat/'.$item->gambar_tentangdetail) }}" alt="Image"></noscript>
                    <div class="team-content">
                        <span>{{ $item->posisi_tentangdetail }}</span>
                        <h3>{{ $item->nama_tentangdetail }}</h3>
                        <div class="team-social">
                            <a href="#" class="control">
                                <i class="bx bx-share-alt"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-instagram"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="bx bxl-linkedin-square"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>