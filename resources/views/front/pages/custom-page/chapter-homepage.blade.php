<section class="page-chapter page-chapter--homepage">
    @include('front.layouts.sections.header')

    @include('front.pages.custom-page.sections.chapter-slider')

    <main class="main-content">

        @include('front.pages.custom-page.sections.chapter-menu')

        <section>
            <div class="container-max">
                <div class="col-lg-12">

                        <div class="heading-button">
                            <h2> My Upcoming Events </h2>
                            <a href="#" class="btn btn--view-all"> View all</a>
                        </div>
                        
                        <div class="chapter-events-upcoming">
                            {{-- loop here --}}
                            <div class="chapter-events-upcoming__box">
                                <div class="row">
                                    <div class="col-md-3 chapter-events-upcoming__image">
                                        <a href="#">
                                            <img src="{{ url('public/images/event-preview.jpg') }}" alt="event title" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-9 content-middle">
                                        <div class="chapter-events-upcoming__content ">
                                            <h4>2020 Installation Celebration</h4>
                                            <h5>January 9, 2020  | 6:00 pm - 9:00 pm</h5>
                                            <div class="chapter-events-upcoming__description limit-me">
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco lab.
                                                 oris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                                            </div>
                                             <a href="#" class="btn btn--primary"> Read More Details <i class="fas fa-arrow-right"></i> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- loop here --}}

                        </div>

                </div>
            </div>
        </section>



        {{-- need to dynamic this sub  --}}
        <section class="video-masking video-masking__fullwidth">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-7 video-masking__video-frame">
                        <div class="html-video">
                            <div class="html-video__button">
                                <button class="active">play</button>
                            </div>
                            <video id="video" width="100%" height="100%" poster="{{ url('public/images/video-cover.jpg') }}" loop muted controlsList="nodownload" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                                <!-- MP4 for Safari, IE9, iPhone, iPad, Android, and Windows Phone 7 -->
                                <source type="video/mp4" src="{{ url('public/images/AREAACentralNewJersey.mp4') }}" />
                                <source type="video/ogg" src="{{ url('public/images/AREAACentralNewJersey.ogg') }}" />
                                <source type="video/webm" src="{{ url('public/images/AREAACentralNewJersey.webm') }}" />
                                <!-- Flash fallback for non-HTML5 browsers without JavaScript -->
                                <object width="100%" height="400" type="application/x-shockwave-flash" data="flashmediaelement.swf">
                                    <param name="movie" value="flashmediaelement.swf" />
                                    <param name="flashvars" value="controls=false&file={{ url('public/images/video-cover.jpg') }}" />
                                    <!-- Image as a last resort -->
                                    <img src="{{ url('public/images/video-cover.jpg') }}" width="320" height="240" title="No video playback capabilities" />
                                </object>
                            </video> 
                        </div>
                    </div>

                    <div class="col-md-5 video-masking__floater">

                        <div class="video-masking__content">
                            <h2>Who We Are</h2>
                            <div class="video-masking__content--push">
                                <p>With over <a href="#">17,000 members</a> in<a href="#"> 41 chapters </a> across the US and Canada, AREAA <strong> is the largest Asian American and Pacific Islander (AAPI) trade organization in North America. </strong>
                                </p>
                                <p>As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</p>

                                <div class="btn-group">
                                    <a href="#" class="btn btn btn--secondary">Join Us</a>
                                    <a href="#" class="btn btn btn--primary">Contact us</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>



            {{-- story section  --}}
            <section class="fullwidth fullwidth__left-push chapter-benefits">
                <div class="container-max">
                    <div class="row">


                        <div class="col-md-6">

                                <h2>Member Benefits</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>

                                {{-- comment insert class on UL  --}}
                                {{-- use class bullet-style only if you want one col  --}}
                                {{-- use class bullet-style__col-2 to enable 2cols --}}
                                {{-- use class bullet-style__col-3 to enable 3cols --}}
                                {{-- bullet-style--uppercase the strong tag will capitalize --}}
                                <ul class="bullet-style bullet-style--uppercase">
                                    <li>Lorem ipsum dolor sit amet <strong>consectetur</strong> adipisicing

                                    </li>
                                    <li>Aipisicing elit, <strong>sed do eiusmod tempor</strong> incididunt ut labore et 
                                    </li>
                                    <li> <strong>Eiusmod </strong>tempor incididunt ut labore et dolore magna aliqua</li>
                                </ul>

                                <div class="btn-group">
                                    <a href="#" class="btn btn btn--secondary">Join Us</a>
                                    <a href="#" class="btn btn btn--primary">Contact us</a>
                               </div>

                        </div>

                        <div class="col-md-6">
                            <img src="{{ url('public/images/chapter-image.jpg') }}" alt="chapter title" class="img-fluid">
                        </div>

                
                    </div>
                </div> {{-- end of default-content--row --}}
            </section> {{-- end of default-content --}}



    {{-- story section  --}}
    <section class="sponsors">
            <div class="container-max">
                <div class="row">

                    <div class="col-md-12">
                        <div class="filter-stone">
                            <ul class="inline-block">
                                <li class="filter-stone--jade"><a href="#"> <span> 1 </span>- Jade </a> </li>
                                <li class="filter-stone--diamond"><a href="#"> <span> 1 </span>- Diamond </a> </li>
                                <li class="filter-stone--emerald"><a href="#"> <span> 1 </span>- Emerald </a> </li>
                                <li class="filter-stone--opal"><a href="#"> <span> 1 </span>- Opal </a> </li>
                                <li class="filter-stone--ruby"><a href="#"> <span> 1 </span>- Ruby </a> </li>
                                <li class="filter-stone--pearl"><a href="#"> <span> 1 </span>- Pearl </a> </li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-md-4">
                            <div class="sponsors__content">
                                <h2>Sponsors</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam. Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
    
                                <div class="btn-group">
                                        <a href="#" class="btn btn btn--primary">Interested In Sponsorship?</a>
                                </div>
                            </div>
                    </div>

                    <div class="col-md-8">
                        <div class="logo-display">
                            <div class="logo-display__single">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--jade">  </div>
                                            <img src="{{ url('public/images/sponsor0.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                            <div class="logo-display__col3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--ruby">  </div>
                                            <img src="{{ url('public/images/sponsor1.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--emerald">  </div>
                                            <img src="{{ url('public/images/sponsor2.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--diamond">  </div>
                                            <img src="{{ url('public/images/sponsor3.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--opal">  </div>
                                            <img src="{{ url('public/images/sponsor4.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--pearl">  </div>
                                            <img src="{{ url('public/images/sponsor5.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--diamond">  </div>
                                            <img src="{{ url('public/images/sponsor6.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--opal">  </div>
                                            <img src="{{ url('public/images/sponsor7.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--pearl">  </div>
                                            <img src="{{ url('public/images/sponsor8.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--diamond">  </div>
                                            <img src="{{ url('public/images/sponsor9.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--opal">  </div>
                                            <img src="{{ url('public/images/sponsor10.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--pearl">  </div>
                                            <img src="{{ url('public/images/sponsor11.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--diamond">  </div>
                                            <img src="{{ url('public/images/sponsor12.jpg') }}" alt="chapter title" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>

            
                </div>
            </div> {{-- end of default-content--row --}}
        </section> {{-- end of default-content --}}


         

    </main>
    @include('front.layouts.sections.footer')
</section>