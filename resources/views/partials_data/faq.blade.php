<section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="pumpkin-color"><b>FAQ Megaduta</b></span>
            <h3>Get Every Single Answer</h3>
            {{-- <p>Get to know PT Megaduta Artha Megah further from the following questions and answers</p> --}}
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
{{-- <section class="faq-area ptb-100">
    <div class="container">
        <div class="section-title">
            <span class="pumpkin-color"><b>FAQ Megaduta</b></span>
            <h3>Get Every Single Answer</h3>
            <p>Get to know PT Megaduta Artha Megah further from the following questions and answers</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <span>1</span>
                                Apa yang menjadi fokus utama bisnis PT Megaduta Artha Megah?
                            </a>
                            <p class="accordion-content show">PT Megaduta Artha Megah is an Indonesian private owned
                                company, established in Jakarta - Indonesia on March 2009 focusing in liquid
                                transportation using ISO-Tank and Flexibag. PT Megaduta Artha Megah are committed to
                                extend our global reach and business expansion to provide a total logistic solution. One
                                of our latest expansions are LCL and Pack delivery. We combine excellent operation
                                system with safety objectives as our step of commitmen</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>2</span>
                                Do I have to commit to a contract?
                            </a>
                            <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem, ipsum
                                dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate, dolorum</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>3</span>
                                Let’s Find A Office Near You?
                            </a>
                            <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem, ipsum
                                dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate, dolorum</p>
                        </li>
                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <span>4</span>
                                Which Plan Is Right For Me?
                            </a>
                            <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem, ipsum
                                dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate, dolorum</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq-img">
                </div>
            </div>
        </div>
    </div>
</section> --}}
