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

       {{-- @include('front.pages.custom-page.sections.dashboard-menu') --}}
       <section class="dashboard-nav">

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
    
    </section>




        <section class="dashboard-content dashboard-content__memberdirectory-detail">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-3">
                        <a href="{{url('dashboard-memberdirectory')}}" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> Back To Members </a>
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
                                            <img src="{{ url('public/images/member-detail.jpg') }}" alt=""> 
                                        </div>

                                        <div class="memberdirectory-detail__year">
                                            <div class="memberdirectory-detail__badge-year">
                                                2020
                                            </div>
                                        </div>

                                        <div class="memberdirectory-detail__badge">
                                            <img src="{{ url('public/images/area-list.png') }}" alt="" class="img-fluid"> 
                                            <img src="{{ url('public/images/area-lux.jpg') }}" alt=""  class="img-fluid"> 
                                        </div>

                                        <div class="memberdirectory-detail__social-link">
                                            <h5>Stay Connected:</h5>

                                            <div class="socials">
                                                <a href="#" title="facebook" class="fb"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                                                <a href="#" title="instagram" class="ig"><i class="fab fa-instagram"></i></a>
                                            </div>
                                        </div>

                                    </div>




                                    <div class="col-md-9 memberdirectory-detail__right">
                                        <div class="memberdirectory-detail__content">
                                             <div class="memberdirectory-detail__date">Member Since 2011</div>
                                             <div class="memberdirectory-detail__title"> <h3> Patrisha Kingsley </h3> </div>
                                             <div class="memberdirectory-detail__position"> AREAA Leadership Role </div>
                                             <div class="memberdirectory-detail__description">
                                                Lorem ipsum dolor sit amet, praesent placerat donec, tristique interdum vestibulum dui varius eget donec, sit pede nec mollis, tincidunt adipiscing varius, at lectus pellentesque viverra quis pellentesque dictumst. Luctus wisi sit natoque, est consectetuer porta, mauris porttitor id arcu faucibus felis. Montes faucibus tempor nec, quam est aenean porta tortor nunc, nisl per erat lobortis ex massa sit, sed purus platea rhoncus mattis. Sed donec commodo. Felis lobortis, turpis tellus sapien, vestibulum etiam eleifend, vestibulum amet quis. Tincidunt a sociis vitae risus veniam elit, mauris aliquam quis, dapibus perspiciatis massa, a in et erat aliquam luctus. Dolor amet mattis, a lorem, libero lorem laoreet vel fusce integer netus, convallis lacinia, sodales posuere nunc vel eget nullam libero. Non ipsum fermentum felis pede tortor imperdiet, malesuada odio sed orci, neque auctor. Hendrerit vehicula nec leo in. Cursus turpis in ut in iaculis, congue fermentum turpis tristique vestibulum, sociosqu porttitor, mauris enim ipsum vestibulum, metus massa ipsum fusce sed. Ut nunc neque libero imperdiet vel, urna libero adipiscing asperiores turpis, interdum donec, scelerisque eget vitae phasellus sollicitudin sit pede, nunc nec class mauris ad in tellus.
                                             </div>
                                             <div class="information">
                                                 <div class="row">

                                                     <div class="col-md-6">
                                                         <b>Location</b>
                                                     </div>
                                                     <div class="col-md-6">
                                                        Seattle, CA
                                                     </div>

                                                     <div class="col-md-6">
                                                        <b>Company</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Lorem Ipsum Elite
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Email</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        P.Kingsley@gmail.com
                                                    </div>


                                                    <div class="col-md-6">
                                                        <b>Phone</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        (123) 456-7890
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Language Spoken</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        English, Spanish, Mandarine
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Designations</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Lorem Ipsum Elite
                                                    </div>

                                                    <div class="col-md-6">
                                                        <b>Area of Specialty</b>
                                                    </div>
                                                    <div class="col-md-6">
                                                        Lorem Ipsum, Dolor Sup Melis, Vellis Lorem
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