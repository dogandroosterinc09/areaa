<section class="page page--dashboard page--dashboard--memberdirectory">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    {{-- <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>National</h3>
                            <h1>Events</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/events-banner.jpg') }}">
        </div>
    </section> --}}




    <main class="main-content">

    @include('front.pages.custom-page.sections.dashboard-menu')
    <!-- <section class="dashboard-nav">

        <div class="dashboard-navigation">
            <div class="dashboard-navigation__wrapper">
                <div class="dashboard-navigation__item">
                    {{-- <ul>
                        <li><a href="#"> Dashboard</a> </li>
                        <li><a href="#"> Events</a> </li>
                        <li><a href="#"> Profile</a> </li>
                        <li><a href="#"> Membership Details</a> </li>
                        <li><a href="#"> Support</a> </li>
                    </ul> --}}
    
                    <nav class="navbar-bar">
                        <ul class="navbar-bar__wrapper">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ url('dashboard-main') }}">Dashboard <span class="sr-only">(current)</span></a>
                                <div class="dropdown-menu">
                                    <ul class="sub-menu">
                                        <li>
                                            <a class="nav-link" href="#"> Sub menu 1</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard') }}">Events</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ url('') }}">Member Directory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('') }}">Profile</a>
                                <div class="dropdown-menu">
                                    <ul class="sub-menu">
                                        <li>
                                            <a class="nav-link" href="#"> Sub menu 1</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('') }}">Membership Details</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                    Support
                                </a>
                            </li>
                        </ul>
                    </nav>
    
    
                </div>
            </div>
        </div>
    
    </section> -->




        <section class="dashboard-content dashboard-content__memberdirectory-detail" data-aos="fade-up">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-3">
                        <a href="{{url('customer/member_directory')}}" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> Back To Members </a>
                    </div>
    
                    <div class="col-md-9">
                        <div class="primary-heading">
                            <h3> Member Directory </h3>
                        </div>
                    </div>

                    <div class="col-md-12">

                        {{-- memberdirectory-detail-content --}}
                        <div class="memberdirectory-detail">
                            <div class="memberdirectory-detail__wrapper container">
                                <div class="row">


                                    <div class="col-md-3 memberdirectory-detail__left">
                                        <div class="memberdirectory-detail__image image-background">
                                            <img src="{{ $member->avatar ? asset($member->avatar) : url('public/images/no-pix.jpg') }}" alt=""> 
                                        </div>

                                        <div class="memberdirectory-detail__year">
                                            <div class="memberdirectory-detail__badge-year">
                                                {{ $member->membership_year }}
                                            </div>
                                        </div>

                                        <div class="memberdirectory-detail__badge">                                            
                                            @foreach(explode(',',$member->badges) as $badge)                                            
                                            <img src="{{ url($badge) }}" alt="" class="img-fluid"> 
                                            @endforeach
                                            <!-- <img src="{{ url('public/images/area-list.png') }}" alt="" class="img-fluid"> 
                                            <img src="{{ url('public/images/area-lux.jpg') }}" alt=""  class="img-fluid">  -->
                                        </div>

                                        @if( !(empty($social_media->facebook) && empty($social_media->twitter) && empty($social_media->instagram)) )
                                        <div class="memberdirectory-detail__social-link">
                                            <h5>Stay Connected:</h5>

                                            <div class="socials">
                                                @if(!empty($social_media->facebook))
                                                <a href="https://facebook.com/{{$social_media->facebook}}" target="_blank" title="facebook" class="fb"><i class="fab fa-facebook-f"></i></a>
                                                @endif
                                                @if(!empty($social_media->twitter))
                                                <a href="https://twitter.com/{{$social_media->twitter}}" target="_blank" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                                                @endif
                                                @if(!empty($social_media->instagram))
                                                <a href="https://instagram.com/{{$social_media->instagram}}" target="_blank" title="instagram" class="ig"><i class="fab fa-instagram"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                        @endif

                                    </div>




                                    <div class="col-md-9 memberdirectory-detail__right">
                                        <div class="memberdirectory-detail__content">
                                             <div class="memberdirectory-detail__date">Member Since {{ $member->membership_year }}</div>
                                             <div class="memberdirectory-detail__title"> <h3> {{ $member->name }} </h3> </div>
                                             <div class="memberdirectory-detail__position"> {{ $member->role }} </div>
                                             <div class="memberdirectory-detail__description">
                                                {{ $member->bio }}
                                             </div>
                                             <div class="information">
                                                 <div class="row">

                                                     <div class="col-md-6">
                                                         <b>Location</b>
                                                     </div>
                                                     <div class="col-md-6">
                                                        {{ $member->location }}
                                                     </div>

                                                     <div class="col-md-6">
                                                        <b>Company</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->company }}
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Email</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->user->email }}
                                                    </div>


                                                    <div class="col-md-6">
                                                        <b>Phone</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->user->phone }}
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Language Spoken</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->language_spoken }}
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Designations</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->designations }}
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Area of Specialty</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        {{ $member->area_of_specialty }}
                                                    </div>


                                                 </div>
                                             </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- memberdirectory-detail-content --}}

                    </div>

                </div>

            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>