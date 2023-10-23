<x-frontend-layout>
    <div class="page-title-area bg-11">
        <div class="container">
            <div class="page-title-content">
                <h2>FAQ</h2>
                <ul>
                    <li>
                        <a href="index.html">
                            Home
                        </a>
                    </li>
                    <li class="active">FAQ</li>
                </ul>
            </div>
        </div>
    </div>


    <section class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <span class="pumpkin-color">FAQ</span>
                <h2>Get Every Single Answer</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi quo aliquam dolores nemo, ipsum
                    excepturi provident similique at id ratione aperiam velit dignissimos illum earum perferendis,
                    dolore</p>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
                                    <span>1</span>
                                    What Payment Methods Are Available?
                                </a>
                                <p class="accordion-content show">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit. Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut,
                                    omnis exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore.
                                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe id animi et
                                    voluptate, dolorum</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span>2</span>
                                    Do I have to commit to a contract?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                    exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem,
                                    ipsum dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate,
                                    dolorum</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span>3</span>
                                    Let’s Find A Office Near You?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                    exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem,
                                    ipsum dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate,
                                    dolorum</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                    <span>4</span>
                                    Which Plan Is Right For Me?
                                </a>
                                <p class="accordion-content">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Soluta, est odio nobis voluptas placeat quaerat totam. Quam quo eius aut, omnis
                                    exercitationem nesciunt unde debitis ea laborum deserunt dolorum tempore. Lorem,
                                    ipsum dolor sit amet consectetur adipisicing elit. Saepe id animi et voluptate,
                                    dolorum</p>
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
    </section>


    <section class="main-contact-area faq-contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h2>Ask Question</h2>
            </div>
            <form id="contactForm">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Your Email">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="form-group">
                            <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <div class="form-group">
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required data-error="Write your message" placeholder="Your Message"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <button type="submit" class="default-btn btn-two">
                            <span>Send Message</span>
                        </button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </form>
        </div>
    </section>

</x-frontend-layout>