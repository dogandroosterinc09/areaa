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
                    <div class="item"><i class="loc"></i> <span>{{ section('Contact Us.data.first.loc_text') }}</span></div>
                    <div class="item"><i class="tel"></i> <a href="{{ section('Contact Us.data.first.tel_link') }}">{{ section('Contact Us.data.first.tel_text') }} </a></div>
                    <div class="item"><i class="mail"></i> <a href="{{ section('Contact Us.data.first.mail_link') }}">{{ section('Contact Us.data.first.mail_text') }}</a></div>
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
                                <li><a href="{{url('photo-gallery')}}"> Photo Gallery </a></li>
                                <li><a href="{{url('contact-us')}}"> Contact Us </a></li>
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-4 footer__item">
                        <article>
                            <h4>Advocacy</h4>
                            <ul>
                                {{-- <li><a href="#"> AREAA Timeline </a></li> --}}
                                <li><a href="#"> How to get involved </a></li>
                                {{-- <li><a href="#"> 3 Point Plan </a></li> --}}
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-5 footer__item">
                        <article>
                            <h4>Resources</h4>
                            <ul>
                                {{-- <li><a href="#"> a | r | e Magazine </a></li> --}}
                                <li><a href="#"> State of Asia America report </a></li>
                                {{-- <li><a href="{{url('photo-gallery')}}"> Photo gallery </a></li> --}}
                                <li><a href="{{url('media')}}"> Media </a></li>
                                {{-- <li><a href="#"> In Language Support </a></li> --}}
                            </ul>
                        </article>


                          {{-- big-advertisement --}}
                          <div class="small-advertisement">
                            <div class="small-advertisement__slick">

                            @php($home = \App\Models\Page::findOrFail(1))
                            @php($partnerships = json_decode($home->other_section2))
                            @if (empty($partnerships))
                                <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Partnership ads.</h3>
                            @else
                                @foreach($partnerships as $partner_slide)
                                    <div class="small-advertisement__slick--item">
                                        <a href="{{$partner_slide->link}}" target="_blank">
                                            <img src="{{$partner_slide->image}}{{-- asset('public/images/advertisement-big.jpg') --}}" alt="ads">
                                         </a>
                                    </div>
                                @endforeach
                            @endif

                                {{--
                                <!-- <div class="small-advertisement__slick--item">
                                    <a href="#" target="_blank">
                                        <img src="{{ asset('public/images/advertisement-big.jpg') }}" alt="areaa run with us"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="https://www.wellsfargo.com/mortgage/" target="_blank">
                                        <img src="{{ asset('public/images/advertisement-wellfargo.jpg') }}" alt="wellfargo"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="https://www.wellsfargo.com/mortgage/" target="_blank">
                                        <img src="{{ asset('public/images/advertisement-bankamerica.jpg') }}" alt="bankamerica"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-citi.jpg') }}" alt="citi"> 
                                    </a>  
                                </div>
                                <div class="small-advertisement__slick--item">
                                    <a href="#">
                                        <img src="{{ asset('public/images/advertisement-usbank.jpg') }}" alt="usbank"> 
                                    </a>  
                                </div> -->
                                --}}
                            </div>
                        </div>
                        {{-- big-advertisement --}}
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 footer__item">
                        <article>
                            <h4>Membership</h4>
                            <ul>
                                <li><a href="{{url('about-us')}}"> Why join </a></li>
                                <li><a href="{{url('areabenefits')}}"> Benefits </a></li>
                                <li><a href="{{ route('customer.login') }}""> Find a Member </a></li>
                                <li><a href="{{url('chapter')}}"> Chapter Locations </a></li>
                                {{-- <li><a href="{{url('membership-registration')}}"> A-List </a></li> --}}
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-4 footer__item">
                        <article>
                            <h4>Events</h4>
                            <ul>
                                {{-- <li><a href="#"> Leadership Summit</a></li>
                                <li><a href="#">Global & Luxury Summit</a></li> --}}
                                {{-- <li><a href="#">Regional Retreats</a></li> --}}
                                <li><a href="{{url('events')}}">National Convention</a></li>
                                <li><a href="{{url('events-chapter')}}">Chapter Events </a></li>
                                {{-- <li><a href="#">How to get involved </a></li> --}}
                            </ul>
                        </article>
                    </div>
                    <div class="col-md-5 footer__item">

                      
                       
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