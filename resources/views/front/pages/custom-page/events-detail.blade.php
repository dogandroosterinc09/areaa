<section class="page page--events-detail">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}

    
    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
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
        <section class="events-section">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <a href="{{ url('events') }}" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> Back to National Events </a>
                    </div>
    
                    <div class="col-lg-8">
                        <div class="event-details">
                            <div class="event-details__image image-background">
                                <img src="{{ $event->attachment ? optional($event->attachment)->url : asset('public/images/no-image.jpg') }}" alt="Member Image" class="img-fluid">
                            </div>
                            <div class="event-details__description">
                                <h3>Description</h3>
                                <p>{!! $event->description !!}</p>
                               
                            </div>
                            <div class="event-details__email">
                                <h5>For more information, contact our admin assistant Mary Johnson: </h5>
                             
                                <a href="mailto:adminassistant@areaa.org"> <i></i> adminassistant@areaa.org</a>
                            </div>
    
                            @if ($nextEvent)
                            <div class="events-next-preview">
                               <div class="container">
                                    <div class="row">
                                        <div class="events-next-preview__image col-sm-3 image-background">
                                            <img src="{{ $nextEvent->attachment ? optional($nextEvent->attachment)->url : asset('public/images/no-image.jpg') }}" alt="Member Image" class="img-fluid">
                                        </div>
                                        <div class="events-next-preview__details content-middle col-sm-9">
                                            <div class="events-next-preview__holder">
                                                <h4>Next National Event</h4>
                                                <h3>{{ $nextEvent->name }}</h3>
                                                <div class="events-next-preview__date-time">
                                                    <div class="events-next-preview__month">{{ $nextEvent->dateRange }}</div> 
                                                    <div class="events-next-preview__time">{{ $nextEvent->time }}</div>
                                                </div>
                                            </div>
                                            
                                            <a href="{{ $nextEvent->url }}" class="btn btn--third"> </a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                            @endif
                        </div>
                       
                    </div>
    
    
                    <div class="col-lg-4">
                        <div class="register-info">
                            <h4>Registration Info</h4>              

                            <div class="register-info__list">
                                <ul>
                                    <li><span><strong>Date</strong></span> <span>{{ $event->dateRange }}</span></li>
                                    <li><span><strong>Time</strong></span> <span>{{ $event->time }}</span></li>
                                    <li><span><strong>Location</strong></span> <span><strong>{{ $event->location_name }}</strong> 
                                        {{ $event->locationAddress }}
                                        </span></li>
                                    <li><span><strong>Cost</strong></span> <span>${{ $event->amount }}</span></li>
                                </ul>
                                <div class="register-info__button">
                                    <a href="#" class="btn btn--secondary" data-toggle="modal" data-target="#registerModal"> Register</a>
                                </div>
                            </div>
                        </div>

                        <div class="event-single-map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11603365.99775855!2d-118.20713936747744!3d32.39640988632438!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dc7361593c7e91%3A0x583eee0359e56260!2sAsian%20Real%20Estate%20Association%20of%20America%20(AREAA)!5e0!3m2!1sen!2sph!4v1580871072564!5m2!1sen!2sph" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>


                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>


<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    {{  Form::open([
        'method' => 'POST',
        'id' => '',
        'route' => ['event.register'],
        'class' => ''
        ])
    }}
      <div class="modal-header">
        <h5 class="modal-title" id="registerModalLabel">Register Now</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
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

        <div class="form-group{{ $errors->has('is_member') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>                    
                    <select id="is_member" name="is_member" class="form-control input-lg">
                        <option value="">Are you a member?</option>
                        <option value="1">Yes</option>
                        <option value="0">No</option>
                    </select>
                </div>
                @if ($errors->has('is_member'))
                    <span id="is_member-error" class="help-block animation-slideDown">
                    {{ $errors->first('is_member') }}
                </span>
                @endif
            </div>
        </div>

        <div class="form-group{{ $errors->has('member_chapter_id') ? ' has-error' : '' }}">
            <div class="col-xs-12">
                <div class="input-group">
                    <span class="input-group-addon"><i class="gi gi-user"></i></span>                    
                    <select id="member_chapter_id" name="member_chapter_id" class="form-control input-lg">
                        <option value="">Select Chapter</option>
                        @foreach(\App\Models\Chapter::all() as $chapter)
                        <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                        @endforeach                        
                    </select>
                </div>
                @if ($errors->has('member_chapter_id'))
                    <span id="member_chapter_id-error" class="help-block animation-slideDown">
                    {{ $errors->first('member_chapter_id') }}
                </span>
                @endif
            </div>
        </div>
        <input type="hidden" name="event_id" value="{{$event->id}}">
      </div>
      <div class="modal-footer">        
        <button type="submit" class="btn btn--secondary">Submit</button>
      </div>
    {{ Form::close() }}
    </div>
  </div>
</div>