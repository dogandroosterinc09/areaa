<section class="page-chapter page-chapter-aloha page-chapter-aloha--login">
    @include('front.layouts.sections.chapter-aloha.header_chapter_aloha')

    {{-- @include('front.pages.custom-page.sections.chapter-slider-aloha') --}}
     {{-- need to dynamic this sub  --}}
     <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Areaa</h3>
                            <h1>Login</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/about-banner.jpg') }}">
        </div>
        
    </section>

    <main class="main-content">

        {{-- @include('front.pages.custom-page.sections.chapter-menu') --}}

            {{-- individual section  --}}
            <section class="login-section">
                <div class="container-max">
                    <div class="row">
    
    
                        <div class="col-lg-6 login-section__left login-section__item">
                          
                            <div class="login-section__form">
                                <form>
                                    {{  Form::open([
                                        'method' => 'POST',
                                        'id' => 'create-contact',
                                        'route' => ['contact.store'],
                                        'class' => '',
                                        ])
                                    }}
                                    <div class="row">
                                        <div class="col-md-12 form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                            {{-- <label for="email">Email</label> --}}
                                            <input id="email" type="text" class="form-control " name="email" placeholder="Username or Email Address *">
                                            @if($errors->has('email'))
                                                <span class="help-block animation-slideDown">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-12 form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            {{-- <label for="password">Subject</label> --}}
                                            <input id="password" type="password" class="form-control " name="password" placeholder="Password*">
                                            @if($errors->has('password'))
                                                <span class="help-block animation-slideDown">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 form-group{{ $errors->has('rember') ? ' has-error' : '' }}">
                                          
                                            <ul class="custom-checkbox">
                                                <li class="custom-checkbox__item">
                                                    <label class="custom-checkbox__item--holder">
                                                        <input type="checkbox">
                                                            Remember Me
                                                        <span class="checkmark custom-checkbox__checkmark custom-checkbox__checkmark--boxstyle"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        
                                            @if($errors->has('subject'))
                                                <span class="help-block animation-slideDown">{{ $errors->first('subject') }}</span>
                                            @endif
                                        </div>
                                        <div class="col-md-6 form-group text-right">
                                            <button type="submit" class="btn btn--secondary">SUBMIT</button>
                                            <a href="#" class="btn btn--forgot"> Forgot your password? </a>
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </form>
                            </div>
    
                        </div>
    
    
                        <div class="col-lg-6 login-section__right login-section__item">
    
                            <div class="login-section__message image-background">
                                <img src="{{ url('public/images/form-background.jpg') }}" alt="event title" class="img-fluid">
                                
                                <div class="login-section__content">
                                    <h4>Not a member yet? Join us today!</h4>
                                    <p>Lorem ipsum dolor sit amet, quam sollicitudin sagittis fringilla lacus enim, leo elit non nec varius sodales. Amet faucibus, id tempor quisque pharetra leo. Curae integer. Diam duis integer vel ut. </p>
                                    <div class="btn-group text-right">
                                    <a href="{{url('membership-registration')}}" class="btn btn btn--secondary">Join AREAA!</a>
                                   </div>
                                </div>
    
                            </div>
                           
                        </div>
                           
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}
         

    </main>
    @include('front.layouts.sections.chapter-aloha.footer_chapter_aloha')
</section>