<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>
<footer class="footer__wrapper image-background">
    <img src="{{ asset('public/images/footer/footer-bg.png') }}" alt="BG Image">
    <div class="container-max">
        <div class="row">
            <div class="col-md-3 footer__item">
                <div class="footer-logo">
                    <a href="{{ url($chapter['slug']) }}">
                        @php( $chapter_logo = \App\Models\ChapterLogo::where('chapter_id', $chapter->id)->get()->last() )
                        <img src="{{ $chapter_logo ? asset($chapter_logo->image) : asset('public/images/header/header-logo.png') }}" alt="logo">
                    </a>
                </div>
              
            </div>
            <div class="col-md-9 footer__item">
                <div class="row">
                    <div class="col-md-4 footer__item">
                        
                        @php($contact_details = \App\Models\ChapterPageContactUs::select('section_1')->where('chapter_id', $chapter->id)->get()->first())
                        @php($contact = json_decode($contact_details->section_1) ? : new \stdClass())

                        <div class="footer-contacts">
                            @if( isset($contact->location_text) && !empty($contact->location_text) )
                            <div class="item"><i class="loc"></i> <span>{{ isset($contact->location_text) ? $contact->location_text : '' }}</span></div>
                            @endif
                            @if( isset($contact->telephone_text) && !empty($contact->telephone_text) )
                            <div class="item"><i class="tel"></i> <a href="{{ isset($contact->telephone_text) ? 'tel:'.str_replace('-','',$contact->telephone_text) : '' }}">{{ isset($contact->telephone_text) ? $contact->telephone_text : '' }}</a></div>
                            @endif
                            @if( isset($contact->mail_text) && !empty($contact->mail_text) )
                            <div class="item"><i class="mail"></i> <a href="{{ isset($contact->mail_text) ? 'mailto:'.$contact->mail_text : '' }}">{{ isset($contact->mail_text) ? $contact->mail_text : '' }}</a></div>
                            @endif
                        </div>

                    </div>
                    <div class="col-md-3 footer__item">
                        <article>
                            <h4>Menu</h4>
                                <ul>
                                    <li><a href="{{ url($chapter['slug']) }}">Home</a></li>
                                    <li><a href="{{ url($chapter['slug'].'/about-us') }}">About us</a></li>
                                    <li><a href="{{ url($chapter['slug'].'/events') }}">Events</a></li>
                                    <li><a href="{{ url($chapter['slug'].'/leadership-board') }}">Leadership</a></li>
                                    <li><a href="{{ url($chapter['slug'].'/contact-us') }}">Contact us </a></li>
                                    <li><a href="{{ url($chapter['slug'].'/login') }}">Log in</a></li>
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