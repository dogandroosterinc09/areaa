<section class="page page--membership-registration">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    {{-- <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>AREAA</h3>
                            <h1>Benefits</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/benefits-banner.jpg') }}">
        </div>
    </section> --}}


    <main class="main-content">

     
        {{-- need to dynamic this sub  --}}
        <section class="masking-background masking-background__equal masking-background--plain">
                        
                    <div class="container-max masking-background__container">
                        <div class="row">
                            {{  Form::open([
                                'method' => 'POST',
                                'id' => '',
                                'route' => ['membership-registration.post'],
                                'class' => ''
                                ])
                            }}
                            <div class="col-md-12">

                                        {{-- ****************************** --}}
                                        <div class="steps-wizard">
                                            <div class="steps-wizard__title">
                                                <p>Join AREAA Today!</p>
                                                <h2>Become A Member</h2>
                                            </div>

                                            <div class="navbar steps-wizard__header">
                                                <div class="navbar-inner">
                                                    <div class="container">
                                                        <ul>
                                                            <li>
                                                                <a href="#tab1" data-toggle="tab" class="active">
                                                                    <strong> 1</strong> 
                                                                    <p>Select Chapter</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab">
                                                                    <strong> 2</strong> 
                                                                    <p>Account Info</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab3" data-toggle="tab">
                                                                    <strong> 3</strong> 
                                                                    <p>Billing & Payment</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div id="bar" class="progress steps-wizard__progress">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                                         aria-valuemax="100" style="width: 0%;"></div>
                                                </div>
                                            </div>

                                       

                                            <div class="tab-content steps-wizard__content">
                                                <div class="tab-pane steps-wizard__items steps-wizard__items--one active" id="tab1">
                                                   
                                                    {{-- steps-wizard__form --}}
                                                    <div class="steps-wizard__form container">
                                                            <div class="row">
                                                                <div class="col-md-12">


                                                                    <div class="steps-wizard__box">
                                                                        <label>Select Your Chapter *</label>
                                                                        <div class="select-box">
                                                                            <select name="chapter_id">
                                                                                <option value="1">San Diego $49.50 now & then $99.00 per Year starting July 1, 2020.</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                
                                                                    <p>*Our annual membership renewal date is June 30th. Current charges reflect a prorated amount.
                                                                    </p>

                                                                </div>
                                                            </div>
                                                    </div>
                                                    {{-- steps-wizard__form --}}
                                                   
                                                    {{-- steps-wizard__button --}}
                                                    <div class="steps-wizard__button container">
                                                        <div class="row">
                                                            <div class="col-md-12 text-center">
                                                                <a href="#tab2" data-toggle="tab" class="btn btn--next">Next</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                     {{-- steps-wizard__button --}}

                                                     <div class="steps-wizard__bottom text-center"> 
                                                        For additional questions, visit our <a href="#">FAQs page<i class="fas fa-long-arrow-alt-right"></i>  </a>
                                                    </div>

                                                </div>
                                                <div class="tab-pane steps-wizard__items steps-wizard__items--two" id="tab2">
                                                    
                                                    {{-- steps-wizard__form --}}
                                                    <div class="steps-wizard__form container">
                                                            <div class="row">

                                                                <div class="col-md-12 steps-wizard__form--field">
                                                                    <h4>Account Info</h4>
                                                                </div>
                                                                
                                                                <div class="col-md-12 steps-wizard__form--field">
                                                                    <input type="text" placeholder="username*" name="user_name" value="{{ old('user_name') }}">
                                                                    @if ($errors->has('user_name'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('user_name') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="password" placeholder="Password*" name="password" value="{{ old('password') }}">
                                                                    @if ($errors->has('password'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('password') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="password" placeholder="Confirm Password*" name="password_confirmation" value="{{ old('password_confirmation') }}">                                                                    
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="First Name*" name="first_name" value="{{ old('first_name') }}">
                                                                    @if ($errors->has('first_name'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('first_name') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Last Name*" name="last_name" value="{{ old('last_name') }}">
                                                                    @if ($errors->has('last_name'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('last_name') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Email Address*" name="email" value="{{ old('email') }}">
                                                                    @if ($errors->has('email'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('email') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Confirm Email Address*" name="email_confirmation" value="{{ old('email_confirmation') }}">
                                                                </div>

                                                                
                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Phone Number*" name="phone" value="{{ old('phone') }}">
                                                                    @if ($errors->has('phone'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('phone') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Company*" name="company" value="{{ old('company') }}">
                                                                    @if ($errors->has('company'))
                                                                        <span id="" class="help-block animation-slideDown">{{ $errors->first('company') }}</span>
                                                                    @endif
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <div class="selector-option">
                                                                        <label> I am a... </label>
                                                                        <div class="select-box">
                                                                            <select name="position">
                                                                                <option>Realtor</option>
                                                                                <option>Realtor</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>  

                                                            </div>

                                                    </div>
                                                    {{-- steps-wizard__form --}}
                                                
                                                    {{-- steps-wizard__button --}}
                                                    <div class="steps-wizard__button container">
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <a href="#tab1" data-toggle="tab" class="btn btn--back">Back</a>
                                                            </div>

                                                            <div class="col-md-6 text-right">
                                                                <a href="#tab3" data-toggle="tab" class="btn btn--next">Next</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- steps-wizard__button --}}


                                                </div>
                                                <div class="tab-pane steps-wizard__items steps-wizard__items--three" id="tab3">
                                                   
                                                        {{-- steps-wizard__form --}}
                                                        <div class="steps-wizard__form container">
                                                            <div class="row">

                                                                <div class="col-md-12 steps-wizard__form--field">
                                                                    <h4>Billing Address</h4>
                                                                </div>

                                                                <div class="col-md-12 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Billing Address*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="City*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="State*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Zipcode*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field flex-middle">
                                                                    <label class="check-box-label"> 
                                                                        <input type="checkbox" name="bill">
                                                                        Billing addres is the same as mailing. 
                                                                    </label>
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Email Address*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Confirm Email Address*">
                                                                </div>

                                                                
                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Phone Number*">
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Company*">
                                                                </div>


                                                                <div class="col-md-12 steps-wizard__form--field flex-middle">
                                                                    <div class="title-icon">
                                                                        <h4>Credit Card</h4>
                                                                        <div class="payment-icon"> Icon payment </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Card Number *">
                                                                </div>

                                                                <div class="col-md-3 steps-wizard__form--field">
                                                                    <input type="text" placeholder="Exp. Date*">
                                                                </div>

                                                                <div class="col-md-3 steps-wizard__form--field">
                                                                    <input type="text" placeholder="CVS*">
                                                                </div>


                                                                <div class="col-md-12 steps-wizard__form--field">
                                                                    <label class="check-box-label"> 
                                                                        <input type="checkbox" name="terms">
                                                                        I Agree to the <a href="#"> Terms & Conditions</a>
                                                                    </label>
                                                                </div>  

                                                            </div>
                                                    </div>
                                                    {{-- steps-wizard__form --}}
                                                
                                                    {{-- steps-wizard__button --}}
                                                    <div class="steps-wizard__button container">
                                                        <div class="row">
                                                            <div class="col-md-6 text-left">
                                                                <a href="#tab1" data-toggle="tab" class="btn btn--back">Back</a>
                                                            </div>

                                                            <div class="col-md-6 text-right">
                                                                <!-- <a href="#tab3" data-toggle="tab" class="btn btn--next">Submit</a> -->                                                                
                                                                <button type="submit" class="btn btn--next">Submit</button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    {{-- steps-wizard__button --}}



                                                </div>
                                            </div>

                                         

                                        </div>

                                        {{-- ****************************** --}}

                            </div>
                        
                        
                        </div>
                    {{ Form::close() }}
                    </div>
            
        </section>


        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>