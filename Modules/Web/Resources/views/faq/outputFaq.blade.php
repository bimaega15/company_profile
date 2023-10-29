<div id="accordion">
    @foreach ($contentFaq as $index => $item)
    @php
    $explode = explode('_', $index);
    $countExplode = count($explode);
    if($countExplode > 1){
    continue;
    }


    $explode = explode('-', $index);
    $classActive = '';
    if($explode[1] == 0){
    $classActive = 'show';
    }
    @endphp
    <div class="card mb-0">
        <div class="card-header" id="{{$index}}">
            <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$index}}" aria-expanded="true" aria-controls="collapse{{$index}}">
                    {{$item}}
                </button>
            </h5>
        </div>

        <div id="collapse{{$index}}" class="collapse {{$classActive}}" aria-labelledby="{{$index}}" data-parent="#accordion">
            <div class="card-body">
                @php
                $dataFaq = $index.'_sub';
                @endphp
                <ul>
                    @foreach ($contentFaq[$dataFaq] as $index => $subItem)
                    <li>{{ $subItem }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    @endforeach
</div>