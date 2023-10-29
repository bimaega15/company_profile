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


    @include('partials_data.faq')


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