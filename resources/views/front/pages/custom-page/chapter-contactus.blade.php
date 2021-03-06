{{-- page-chapter page-chapter--contactus page-chapter-aloha page-chapter-aloha--contactus --}}
<section class="page-chapter page-chapter--contactus">
    @include('front.layouts.sections.chapter.header_chapter')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}

    @include('front.pages.custom-page.sections.chapter-slider')

    <main class="main-content">

        {{-- @include('front.pages.custom-page.sections.chapter-menu-black')  --}}

        {{-- individual section  --}}
        <section class="contact-section paper-background curl-tail-bottom">
            <div class="container">
                <div class="row">


                    <div class="col-lg-6 contact-section__item contact-section__left curl-tail-side" data-aos="fade-right">
                        <div class="contact-details-content">
                            {!! $chapter_page_contactus->content !!}
                            <!-- <h3>Have Questions?</h3>
                            <h1>Contact Us</h1>
                            <p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut. </p> -->

                            @php($section_1 = json_decode($chapter_page_contactus->section_1))
                            <div class="contact-details">
                                <!-- <div class="contact-details__item"><i class="loc"></i> <span>Chapter President: Abe Lee</span></div>
                                <div class="contact-details__item"><i class="tel"></i> <a href="tel:8082164999">808-216-4999 </a></div>
                                <div class="contact-details__item"><i class="mail"></i> <a href="mailto:abelee1948@gmail.com">abelee1948@gmail.com</a></div> -->

                                @if($section_1->location_text)
                                <div class="contact-details__item"><i class="loc"></i> <span>{{ $section_1->location_text }}</span></div>
                                @endif
                                @if($section_1->telephone_text)
                                <div class="contact-details__item"><i class="tel"></i> <a href="{{ 'tel:'.str_replace('-','',$section_1->telephone_text) }}">{{ $section_1->telephone_text }} </a></div>
                                @endif
                                @if($section_1->mail_text)
                                <div class="contact-details__item"><i class="mail"></i> <a href="{{ 'mailto:'.$section_1->mail_text }}">{{ $section_1->mail_text }}</a></div>
                                @endif
                            </div>
                        </div>

                    </div>


                    <div class="col-lg-6 contact-section__item contact-section__right" data-aos="fade-left">
                        <h4>{{ isset($section_1->form_text)? $section_1->form_text : 'Fill out the form below and someone will be in contact with you shortly...'}}</h4>
                        <div class="contact-form">
                            {{  Form::open([
                                'method' => 'POST',
                                'id' => 'create-contact',
                                'route' => ['chapter_contact.store', 'slug' => $chapter->slug],
                                'class' => '',
                                ])
                            }}

                            {{-- $chapter->slug --}}
                            <div class="form-box row">
                                <div class="col-md-6 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name">Name</label>
                                    <input id="name" type="text" class="form-control " name="first_name" placeholder="First Name">
                                    @if($errors->has('first_name'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <label for="subject">Subject</label>
                                    <input id="subject" type="text" class="form-control " name="last_name" placeholder="Last name">
                                    @if($errors->has('last_name'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('last_name') }}</span>
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
                                    {{-- <textarea id="message" name="message" class="form-control" placeholder="Message"> </textarea> --}}
                                    <textarea id="message" name="message" class="form-control" placeholder="Message*" spellcheck="false"></textarea>
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
    @include('front.layouts.sections.chapter.footer_chapter')
</section>