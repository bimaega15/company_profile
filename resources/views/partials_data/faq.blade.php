<section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="pumpkin-color"><b>FAQ Megaduta</b></span>
            <h3>Get Every Single Answer</h3>
            <p>We are ready to answer all general questions and can help answer general questions that often arise from
                our clients Megaduta</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <ul class="accordion">
                        @php
                            $noFaq = 1;
                        @endphp

                        @foreach (UtilsHelp::getFaq() as $key => $item)
                            @php
                                $getDataFaq = UtilsHelp::getFaq();
                                $checkSub = explode('_', $key);
                                $nextLoop = '';
                                if (count($checkSub) > 1) {
                                    continue;
                                }
                            @endphp
                            <li class="accordion-item">
                                <a class="accordion-title {{ $noFaq == 1 ? 'active' : '' }}" href="javascript:void(0)">
                                    <span>{{ $noFaq }}</span>
                                    {{ $item }}
                                </a>
                                <p class="accordion-content {{ $noFaq == 1 ? 'show' : '' }}"
                                    style="text-align: justify;">
                                    @php
                                        $keySub = $key . '_sub';
                                    @endphp

                                    @if (isset($getDataFaq[$keySub]))
                                        @foreach ($getDataFaq[$keySub] as $index => $subItem)
                                            {{ $subItem }} <br />
                                        @endforeach
                                    @endif
                                </p>
                            </li>
                            @php
                                $noFaq++;
                            @endphp
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                </div>
            </div>
        </div>
    </div>
</section>
