@extends('front.layouts.base')

@section('content')
    @if (!empty($page))
        @php
            $item = $page;
        @endphp
    @else
        @php
            $item = (object) ['name' => 'login'];
        @endphp
    @endif
   

<section class="page page--login">

    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}

    
        {{-- need to dynamic this sub  --}}
        {{-- <section class="masking-background login-mask login-section" style="display:none !important;">
            <div class="masking-background__wrapper container-max">
                <div class="masking-background__item">
                    <div class="container-max masking-background__container">
                        <div class="row">
                            <div class="col-md-6 content-middle login-section__left">

                                <div class="masking-background__content">
                                    {{  Form::open([
                                        'method' => 'POST',
                                        'id' => 'form-login',
                                        'route' => ['customer.login.post'],
                                        'class' => 'form-horizontal'
                                        ])
                                    }}
                                        @if (session()->has('status'))
                                            <div class="alert alert-success">
                                                {{ session()->get('status') }}
                                            </div>
                                        @endif
                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                                                    <input type="text" id="email" name="email"
                                                        class="form-control input-lg" placeholder="Email"
                                                        value="{{ old('email') }}" autofocus>
                                                </div>
                                                @if ($errors->has('email'))
                                                    <span id="email-error" class="help-block animation-slideDown">
                                                    {{ $errors->first('email') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="col-xs-12">
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                                                    <input type="password" id="password" name="password"
                                                        class="form-control input-lg" placeholder="Password">
                                                </div>
                                                @if ($errors->has('password'))
                                                    <span id="password-error" class="help-block animation-slideDown">
                                                    {{ $errors->first('password') }}
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group form-actions">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <label class="switch switch-primary">
                                                        <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : ''}}>
                                                        <span></span>
                                                        <small>Remember me</small>
                                                    </label>
                                                    <div class="no-account">Don't have any account ? <a href="#"> Sign Up Register</a></div>
                                                    <div class="lost-password">Remind <a href="{{ url('customer/password/email') }}"> Forgot password?</a></div>
                                                </div>
                                                <div class="col-md-12 text-right">
                                                    <a href="{{url('dashboard-main')}}" class="btn btn--secondary"><i class="fa fa-arrow-right"></i>
                                                        Log In
                                                    </a>
                                               
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">

                                        </div>
                                    {{ Form::close() }}
                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="masking-background__image image-background">
                <img src="{{ url('public/images/our-story-image.jpg') }}">
            </div>
        </section> --}}



               {{-- individual section  --}}
               <section class="login-section login-section-main">
                <div class="container-max">
                    <div class="row">
    
    
                        <div class="col-lg-6 login-section__left login-section__item">
                          
                            <div class="login-section__form">
                                <form>
                                    {{  Form::open([
                                        'method' => 'POST',
                                        'id' => 'form-login',
                                        'route' => ['customer.login.post'],
                                        'class' => 'form-horizontal'
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
                                <img src="{{ url('public/images/our-story-image.jpg') }}" alt="event title" class="img-fluid">
                                
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
    





    @include('front.layouts.sections.footer')

</section>

@endsection

@push('extrascripts')
<script type="text/javascript" src="{{ asset('public/js/libraries/front_login.js') }}"></script>
@endpush
