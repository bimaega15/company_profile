<section class="team-area bg-color pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span style="font-weight: bold;">Our Executives</span>
            <h3>
                Leading the way, here are our Executives
            </h3>
        </div>
        <div class="row">
            @foreach (UtilsHelp::aboutUsDetailKompleks() as $index => $item)
                <div
                    class="col-lg-4 col-md-6 {{ count(UtilsHelp::aboutUsDetailKompleks()) - 1 == $index ? 'offset-md-3 offset-lg-0' : '' }}">
                    <div class="single-team-member">
                        <img data-cfsrc="{{ asset('upload/profilesingkat/' . $item->gambar_tentangdetail) }}"
                            alt="Image" style="display:none;visibility:hidden;"><noscript><img
                                src="{{ asset('upload/profilesingkat/' . $item->gambar_tentangdetail) }}"
                                alt="Image"></noscript>
                        <div class="team-content">
                            <h3>{{ $item->nama_tentangdetail }}</h3>
                            <span>{{ $item->posisi_tentangdetail }}</span>

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
