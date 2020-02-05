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
                            <h1>2020 Global Luxury Summit</h1>
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
                        <a href="#" class="btn btn--back">   <i href="#" class="btn btn--third"> </i> Back to National Events </a>
                    </div>
    
                    <div class="col-lg-8">
                        <div class="event-details">
                            <div class="event-details__image image-background">
                                <img src="{{ asset('public/images/our-story-image.jpg') }}" alt="Member Image" class="img-fluid">
                            </div>
                            <div class="event-details__description">
                                <h3>Description</h3>
                                <p>Lorem ipsum dolor sit amet, justo non porttitor, ornare vel etiam at vulputate, ipsum elit lorem leo quis. Rutrum eu turpis, ultricies nunc, sed fermentum tincidunt nulla. Vel duis arcu a ligula, ultrices neque class pellentesque luctus, ac quis curae luctus adipiscing vulputate imperdiet, vehicula nunc morbi, sodales vel wisi. Consequat mauris sapiente sem leo duis nulla, turpis class dolor, vitae purus arcu dolor, sapien pellentesque etiam fringilla placerat integer. Diam ipsum suspendisse nec. Nunc eu, suscipit quasi optio, ultrices sunt porta orci, et sed vel magnis. Sint eu ornare sed, praesent varius tristique, suscipit eget nunc ut libero ligula quam, maecenas iaculis magna pellentesque venenatis, ligula quisque sit. Pede voluptatum, sagittis tempor porttitor rutrum in felis, nibh condimentum bibendum, ullamcorper et consequat. </p>
                               
                            </div>
                            <div class="event-details__email">
                                <h5>For more information, contact our admin assistant Mary Johnson: </h5>
                             
                                <a href="mailto:adminassistant@areaa.org"> <i></i> adminassistant@areaa.org</a>
                            </div>
    
                            <div class="events-next-preview">
                               <div class="container">
                                    <div class="row">
                                        <div class="events-next-preview__image col-sm-3 image-background">
                                            <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image" class="img-fluid">
                                        </div>
                                        <div class="events-next-preview__details content-middle col-sm-9">
                                            <div class="events-next-preview__holder">
                                                <h4>Next National Event</h4>
                                                <h3>2020 National Convention</h3>
                                                <div class="events-next-preview__date-time">
                                                    <div class="events-next-preview__month">Oct. 08 - 10</div> 
                                                    <div class="events-next-preview__time">7:00pm - 9:00pm</div>
                                                </div>
                                            </div>
                                            
                                            <a href="#" class="btn btn--third"> </a>
                                        </div>
                                    </div>
                               </div>
                            </div>
                        </div>
                       
                    </div>
    
    
                    <div class="col-lg-4">
                        <div class="register-info">
                            <h4>Registration Info</h4>              

                            <div class="register-info__list">
                                <ul>
                                    <li><span><strong>Date</strong></span> <span>December 12 - 16, 2020</span></li>
                                    <li><span><strong>Time</strong></span> <span>7:00pm - 9:00pm</span></li>
                                    <li><span><strong>Location</strong></span> <span><strong>Four Seasons Chicago</strong> 
                                        120 E Delaware Pl, 
                                        Chicago, CA 60611 United States</span></li>
                                    <li><span><strong>Cost</strong></span> <span>$70.00</span></li>
                                </ul>
                                <div class="register-info__button">
                                    <a href="#" class="btn btn--secondary"> Register</a>
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