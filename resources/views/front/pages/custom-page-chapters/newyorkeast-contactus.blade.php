<section class="page-chapter page-chapter-newyorkeast page-chapter-newyorkeast--contactus">
    @include('front.layouts.sections.chapter-newyorkeast.header_chapter_newyorkeast')

    @include('front.pages.custom-page.sections.chapter-slider-newyorkeast')

    <main class="main-content">
        
        
       {{-- individual section  --}}
       <section class="contact-section paper-background curl-tail-bottom">
        <div class="container">
            <div class="row">


                <div class="col-lg-6 contact-section__item contact-section__left curl-tail-side">
                    <div class="contact-details-content">
                        <h3>Have Questions?</h3>
                        <h1>Contact Us</h1>
                        <p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut. </p>

                        <div class="contact-details">
                            <div class="contact-details__item"><i class="loc"></i> <span>3990 Old Town Avenue C304, San Diego, CA 92110</span></div>
                            <div class="contact-details__item"><i class="tel"></i> <a href="tel:619.795.7873 ">619.795.7873 </a></div>
                            <div class="contact-details__item"><i class="mail"></i> <a href="mailto:contact@areaa.org">contact@areaa.org</a></div>
                        </div>
                    </div>

                </div>


                <div class="col-lg-6 contact-section__item contact-section__right">
                    <h4>Fill out the form below and someone will be in contact with you shortly.</h4>
                    <div class="contact-form">
                        {{  Form::open([
                            'method' => 'POST',
                            'id' => 'create-contact',
                            'route' => ['contact.store'],
                            'class' => '',
                            ])
                        }}
                        <div class="form-box row">
                            <div class="col-md-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name">Name</label>
                                <input id="name" type="text" class="form-control " name="name" placeholder="First Name">
                                @if($errors->has('name'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('name') }}</span>
                                @endif
                            </div>
                            <div class="col-md-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                <label for="subject">Subject</label>
                                <input id="subject" type="text" class="form-control " name="subject" placeholder="Last name">
                                @if($errors->has('subject'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('subject') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email">Email</label>
                                <input id="email" type="text" class="form-control " name="email" placeholder="Email">
                                @if($errors->has('email'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                <label for="message">Message</label>
                                <textarea id="message" name="message" class="form-control">Message </textarea>
                                @if($errors->has('message'))
                                    <span class="help-block animation-slideDown">{{ $errors->first('message') }}</span>
                                @endif
                            </div>
                            <div
                                    class="col-md-12 form-group gcapcha-section {{ $errors->has('g-recaptcha-response') ? ' has-error' : '' }}">
                                {!! NoCaptcha::display() !!}
                                @if($errors->has('g-recaptcha-response'))
                                    <span
                                            class="help-block animation-slideDown">{{ $errors->first('g-recaptcha-response') }}</span>
                                @endif
                            </div>
                            <div class="col-md-12 form-group text-right">
                                <button type="submit" class="btn btn--secondary">SUBMIT MESSAGE</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}


    </main>
    @include('front.layouts.sections.chapter-newyorkeast.footer_chapter_newyorkeast')
</section>