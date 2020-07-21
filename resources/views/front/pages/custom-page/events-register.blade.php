@extends('front.layouts.base')

<section class="page page--events-detail">
    @include('front.layouts.sections.header')
    
    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>National Events</h3>
                            <h1>{{ $event->name }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/events-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">
        <section class="events-section" data-aos="fade-up">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        {{-- <!-- <a href="{{ url('events') }}" class="btn btn--back">   
                            <i href="#" class="btn btn--third"> </i> Back to National Events </a> --> --}}
                    </div>
    
                    <div class="col-lg-8">
                        <div class="event-details">

                            @if($event->attachment)
                            <div class="event-details__image image-background">
                                <img src="{{ $event->attachment ? optional($event->attachment)->url : asset('public/images/watermark.jpg') }}" alt="Member Image" class="img-fluid">
                            </div>
                            @endif

                            <div class="event-details__description">
                                <h3>Description</h3>
                                <p>{!! $event->description !!}</p>
                            </div>

                            <div class="event-details__contacts">
                                <p>For more information, contact our admin assistant Mary Jonson:</p>
                                <p><i class="fas fa-envelope-open-text"></i>adminassistant@areaa.org</p>

                            </div>
                            
                            <!-- <div class="event-details__email">
                                <h5>For more information, contact our admin assistant Mary Johnson: </h5>
                             
                                <a href="mailto:adminassistant@areaa.org"> <i></i> adminassistant@areaa.org</a>
                            </div> -->


                        </div>
                       
                    </div>
    
    
                    <div class="col-lg-4">
                        <div class="register-info">
                            {{  Form::open([
                                'method' => 'POST',
                                'id' => '',
                                'route' => ['event.register'],
                                'class' => ''
                                ])
                            }}

                            @php($viewing_user = 'Guest')
                            @auth
                                @if (auth()->user()->hasAnyRole(['Customer']))
                                    @php($viewing_user = 'Member')
                                @endif
                            @endif

                            <h4>Registration Info {{$viewing_user}}</h4>              
                            <div class="register-info__list">

                                <div class="form-label">
                                    <h4>member information</h4>
                                </div>

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="First name"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="last_name" name="last_name" class="form-control input-lg"
                                                    placeholder="Last name"
                                                    value="{{ old('last_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('last_name'))
                                            <span id="last_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('last_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="email" name="email" class="form-control input-lg"
                                                    placeholder="Email"
                                                    value="{{ old('email') }}" autofocus>
                                        </div>
                                        @if ($errors->has('email'))
                                            <span id="email-error" class="help-block animation-slideDown">
                                            {{ $errors->first('email') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="phone" name="phone" class="form-control input-lg"
                                                    placeholder="Phone Number"
                                                    value="{{ old('phone') }}" autofocus>
                                        </div>
                                        @if ($errors->has('phone'))
                                            <span id="phone-error" class="help-block animation-slideDown">
                                            {{ $errors->first('phone') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <hr>
                                <div class="form-label">
                                    <h4>BILLING INFORMATION</h4>
                                </div>

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="First Name"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="Last Name"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="Street Address"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="City"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <hr>


                                <div class="form-label">
                                    <h4>credit card payment</h4>
                                    <div class="form-label__img">
                                        <img src="{{ url('public/images/payment-option.jpg') }}" alt="payment-option" class="img-fluid"> 
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="Card Name"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="first_name" name="first_name" class="form-control input-lg"
                                                    placeholder="Card Number"
                                                    value="{{ old('first_name') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group__col2 form-group{{ $errors->has('csv_text') ? ' has-error' : '' }}">
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="csv_text" name="csv_text" class="form-control input-lg"
                                                    placeholder="CSV"
                                                    value="{{ old('csv_text') }}" autofocus>
                                        </div>
                                        @if ($errors->has('first_name'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('first_name') }}
                                        </span>
                                        @endif
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                            <input type="text" id="expiry_date" name="expiry_date" class="form-control input-lg"
                                                    placeholder="Expiry Date"
                                                    value="{{ old('expiry_date') }}" autofocus>
                                        </div>
                                        @if ($errors->has('expiry_date'))
                                            <span id="first_name-error" class="help-block animation-slideDown">
                                            {{ $errors->first('expiry_date') }}
                                        </span>
                                        @endif
                                    </div>
                                </div>

                                {{--
                                @auth
                                    @if ($event->amount_member > 0) 
                                        <li><span><strong>Member Price</strong></span> <span>${{ $event->amount_member }}</span></li>
                                    @endif
                                @else
                                    @if ($event->amount > 0) <li><span><strong>Cost</strong></span> <span>${{ $event->amount }}</span></li> @endif
                                @endauth
                                --}}

                                <div class="register-info__button">
                                    <input type="hidden" name="event_id" value="{{ isset($event) ? $event->id : '' }}">
                                    <button type="submit" class="btn btn--secondary">Submit</button>
                                </div>
                            </div>
                            {{ Form::close() }}
                        </div>

                        @if($event->latitude && $event->longitude)
                        <div class="event-single-map">
                            @if($event->location_name && strtolower($event->location_name)!='online')
                            <iframe width="100%" height="300" frameborder="0" style="border:0" allowfullscreen src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB5npvhjIbytxAbiMKUQak32FQ8-boyLg0&q={{$event->location_name}},{{$event->city}}+{{$event->state}}"></iframe>
                            @endif
                        </div>
                        @endif
                    </div>


                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>

@include('front.pages.custom-page.sections.event-registration-modal')