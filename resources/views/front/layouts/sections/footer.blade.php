<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
<footer class="footer__wrapper image-background">
    <img src="{{ asset('public/images/footer/footer-bg.png') }}" alt="BG Image">
    <div class="container-max">
        <div class="row">
            <div class="col-md-4 footer__item">
                <div class="footer-logo">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('public/images/footer/footer-logo.png') }}" alt="logo">
                    </a>
                </div>
                <div class="footer-contacts footer-contacts__main">
                    <div class="item"><i class="loc"></i> <span>3990 Old Town Avenue C304, San Diego, CA 92110</span></div>
                    <div class="item"><i class="tel"></i> <a href="tel:619.795.7873 ">619.795.7873 </a></div>
                    <div class="item"><i class="mail"></i> <a href="mailto:contact@areaa.org">contact@areaa.org</a></div>
                </div>

                <div class="join-content join-content__left">
                    <div class="title">
                        <h4>Join AREAA today!</h4>
                    </div>
                    <div class="text-center">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        <div class="btn-wrap">
                            <a href="{{url('membership-registration')}}" class="btn btn--secondary">Join</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-8 footer__item">
                <div class="row">
                    <div class="col-md-3 footer__item">
                        <article>
                            <h4>About Us</h4>
                            <ul>
                                <li><a href="{{url('about-us')}}"> About AREAA </a></li>
                                <li><a href="{{url('executive-board')}}"> Executive Board </a></li>
                                <li><a href="{{url('delegate-board')}}"> Delagate Board </a></li>
                                <li><a href="{{url('our-partners')}}"> Our Partners </a></li>
                                <li><a href="{{url('sponsors')}}">Our Sponsors</a></li>
                                <li><a href="{{url('FAQ')}}"> FAQ </a></li>
                                <li><a href="{{url('media')}}"> Photo Gallery </a></li>
                                <li><a href="#"> Career </a></li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-4 footer__item">
                        <article>
                            <h4>Advocacy</h4>
                            <ul>
                                <li><a href="#"> AREAA Timeline </a></li>
                                <li><a href="#"> How to get involved </a></li>
                                <li><a href="#"> 3 Point Plan </a></li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-5 footer__item">
                        <article>
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="#"> a | r | e Magazine </a></li>
                                <li><a href="#"> State of Asia America report </a></li>
                                <li><a href="{{url('photo-gallery')}}"> Photo gallery </a></li>
                                <li><a href="{{url('media')}}"> Webinars </a></li>
                                <li><a href="#"> In Language Support </a></li>
                            </ul>
                        </article>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 footer__item">
                        <article>
                            <h4>Membership</h4>
                            <ul>
                                <li><a href="#"> Why join </a></li>
                                <li><a href="{{url('areabenefits')}}"> Benefits </a></li>
                                <li><a href="#"> Find a Member </a></li>
                                <li><a href="#"> Chapter Locations </a></li>
                                <li><a href="{{url('membership-registration')}}"> A-List </a></li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-4 footer__item">
                        <article>
                            <h4>Events</h4>
                            <ul>
                                <li><a href="#"> Leadership Summit</a></li>
                                <li><a href="#">Global & Luxury Summit</a></li>
                                <li><a href="#">Regional Retreats</a></li>
                                <li><a href="#">National Convention</a></li>
                                <li><a href="#">Chapter Events </a></li>
                                {{-- <li><a href="#">How to get involved </a></li> --}}
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-5 footer__item">

                         {{-- big-advertisement --}}
                         <div class="small-advertisement ">
                            <div class="small-advertisement__slick">
                                <div class="small-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-big.jpg') }}" alt="ads"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-big.jpg') }}" alt="ads"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-big.jpg') }}" alt="ads"> 
                                    </a>  
                                </div>
                            </div>
                        </div>
                        {{-- big-advertisement --}}
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__copyright">
        <div class="container-max">
            <div class="row">
                <div class="col-md-9">
                    <div class="copyright-txt">
                        &#169; Copyright 2019 AREAA. All Rights Reserved.    | <a href="#">Web Design by Dog and Rooster, Inc.</a>    |     <a href="#">Privacy Policy</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smi-wrap">
                        <a href="#" title="facebook" class="fb"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" title="twitter" class="tw"><i class="fab fa-twitter"></i></a>
                        <a href="#" title="instagram" class="ig"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>