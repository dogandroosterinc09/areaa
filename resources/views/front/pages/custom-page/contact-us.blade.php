<section class="page page--contact-us">
    @include('front.layouts.sections.header')
   
  
    <main class="main-content">



        {{-- individual section  --}}
        <section class="contact-section paper-background curl-tail-bottom">
            <div class="container">
                <div class="row">


                    <div class="col-lg-6 contact-section__item contact-section__left curl-tail-side">
                        <div class="contact-details-content">
                            {!! section('Contact Us.data.first.content') !!}
                            <!-- <h3>Have Questions?</h3>
                            <h1>Contact Us</h1>
                            <p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut. </p> -->

                            <div class="contact-details">
                                <div class="contact-details__item"><i class="{{ section('Contact Us.data.first.loc_icon') }}"></i> <span>{{ section('Contact Us.data.first.loc_text') }}</span></div>
                                <div class="contact-details__item"><i class="{{ section('Contact Us.data.first.tel_icon') }}"></i> <a href="{{ section('Contact Us.data.first.tel_link') }}">{{ section('Contact Us.data.first.tel_text') }}</a></div>
                                <div class="contact-details__item"><i class="{{ section('Contact Us.data.first.mail_icon') }}"></i> <a href="{{ section('Contact Us.data.first.mail_link') }}">{{ section('Contact Us.data.first.mail_text') }}</a></div>
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
                                    <input id="name" type="text" class="form-control " name="first_name" placeholder="First Name *" value="{{old('first_name')}}">
                                    @if($errors->has('first_name'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('first_name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-6 form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                    <label for="subject">Subject</label>
                                    <input id="subject" type="text" class="form-control " name="last_name" placeholder="Last name *" value="{{old('last_name')}}">
                                    @if($errors->has('last_name'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('last_name') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" class="form-control " name="email" placeholder="Email *" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                        <span class="help-block animation-slideDown">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-md-12 form-group {{ $errors->has('message') ? ' has-error' : '' }}">
                                    <label for="message">Message *</label>
                                    <textarea id="message" name="message" class="form-control">{{old('message') ? : 'Message'}}*</textarea>
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

        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>
@push('extrascripts')
{!! NoCaptcha::renderJs() !!}
<script type="text/javascript" src="{{ asset('public/js/libraries/contacts.js') }}"></script>
@endpush