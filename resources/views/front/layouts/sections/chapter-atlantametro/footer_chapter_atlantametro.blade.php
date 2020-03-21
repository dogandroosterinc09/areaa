<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
<footer class="footer__wrapper image-background">
    <img src="{{ asset('public/images/footer/footer-bg.png') }}" alt="BG Image">
    <div class="container-max">
        <div class="row">
            <div class="col-md-3 footer__item">
                <div class="footer-logo">
                    <a href="{{ url('atlantametro') }}">
                        <img src="{{ asset('public/images/logos/areaa_atlanta_metro.png') }}" alt="logo">
                    </a>
                </div>
               
            </div>
            <div class="col-md-9 footer__item">
              
                <div class="row">
                    <div class="col-md-4 footer__item">
                        <div class="footer-contacts">
                            <div class="item"><i class="loc"></i> <span>Chapter President: Helen Pham</span></div>
                            <div class="item"><i class="tel"></i> <a href="tel:6789952526">678-995-2526 </a></div>
                            <div class="item"><i class="mail"></i> <a href="mailto:baldwinklee@gmail.com"> helennguyen127@gmail.com</a></div>
                        </div>
                    </div>
                    <div class="col-md-3 footer__item">
                        <article>
                            <h4>Menu</h4>
                                <ul>
                                    <li><a href="{{ url('atlantametro') }}">Home</a></li>
                                    <li><a href="{{ url('atlantametro-aboutus') }}">About us</a></li>
                                    <li><a href="{{ url('atlantametro-events') }}">Events</a></li>
                                    <li><a href="{{ url('atlantametro-leadership') }}">Leadership</a></li>
                                    <li><a href="{{ url('atlantametro-contactus') }}">Contact us </a></li>
                                    <li><a href="{{ url('atlantametro-login') }}">Log in</a></li>
                                    <li><a href="{{ url('/') }}"> AREAA National</a></li>
                                </ul>
                        </article>
                    </div>
                    <div class="col-md-5 footer__item">
                        <div class="join-content">
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