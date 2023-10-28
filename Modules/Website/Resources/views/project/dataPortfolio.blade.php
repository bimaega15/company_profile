<div class="row">
    @foreach ($project as $item)
    <div class="col-lg-4 col-sm-6">
        <div class="single-services-box">
            <a href="#" class="services-img">
                <img src="{{ asset('upload/projects/'.$item->gambar_projects) }}" alt="{{$item->gambar_projects}}" style="height: 200px;">
            </a>
            <div class="services-content">
                <h3>
                    <a href="#">{{ $item->judul_projects }}</a>
                </h3>
                {{ UtilsHelp::tanggalBulanTahunKonversi($item->waktu_projects) }}
                {!! $item->keterangan_projects !!}
            </div>
        </div>
    </div>
    @endforeach

</div>