<section class="homepage homepage--main">
    @include('front.layouts.sections.header')
    @include('front.pages.custom-page.sections.slider')

    <main class="main-content">
        {{-- Start  --}}
        <section class="events-camp wrapper padding-top90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-10">
                        <h2>Events & Campaigns</h2>
                    </div>
                    <div class="col-md-2">
                        <a href="#" class="btn btn--secondary">View All</a>
                    </div>
                </div>
            </div>
            <div class="events-camp-slider">
                <div class="events-camp-slider--item">
                    <a href="#">
                        <div class="img-holder">
                            <img src="{{ asset('public/images/events-img1.jpg') }}" alt="Events Image">
                        </div>
                        <div class="title">Leadership Summit <span><i></i></span></div>
                    </a>
                </div>
                <div class="events-camp-slider--item">
                    <a href="#">
                        <div class="img-holder">
                            <img src="{{ asset('public/images/events-img2.jpg') }}" alt="Events Image">
                        </div>
                        <div class="title">Regional Retreats <span><i></i></span></div>
                    </a>
                </div>
                <div class="events-camp-slider--item">
                    <a href="#">
                        <div class="img-holder">
                            <img src="{{ asset('public/images/events-img3.jpg') }}" alt="Events Image">
                        </div>
                        <div class="title">Global & Luxury Summit <span><i></i></span></div>
                    </a>
                </div>
                <div class="events-camp-slider--item">
                    <a href="#">
                        <div class="img-holder">
                            <img src="{{ asset('public/images/events-img4.jpg') }}" alt="Events Image">
                        </div>
                        <div class="title">National Convention <span><i></i></span></div>
                    </a>
                </div>
                <div class="events-camp-slider--item">
                    <a href="#">
                        <div class="img-holder">
                            <img src="{{ asset('public/images/events-img1.jpg') }}" alt="Events Image">
                        </div>
                        <div class="title">Leadership Summit <span><i></i></span></div>
                    </a>
                </div>
            </div>
        </section>
        {{-- End of Events Camp --}}

        {{-- Start  --}}
        <section class="become-member wrapper margin-top90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Become a Member</h2>
                        <div class="content-text">
                            <p>With over <b class="red-txt">17,000 members</b> in <b class="red-txt">41 chapters</b> across the US and Canada, AREAA is <b>the largest Asian American and Pacific Islander (AAPI) trade organization in North America</b>.</p>
                            <p>As a member, you’ll receive discounted pricing to all AREAA events, FREE webinar training to help fine-tune your skill sets, and be able to participate in International Trade missions. The benefits don’t stop there; below are more reasons as to why it pays to be an AREAA Member.</p>
                            <br>
                            <p><a href="#" class="btn btn--secondary margin-right20">Learn More</a> <a href="#" class="btn btn--primary">Become a Member</a></p>
                        </div>
                    </div>
                    <div class="col-md-5"></div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="members-count">
                            <div class="txt-count">
                                <div><span class="count">17000</span><span>+</span></div>
                                <div class="title">Members</div>
                                <div class="sub-txt">& Growing</div>
                            </div>
                            <div class="txt-count">
                                <div><span class="count">41</span></div>
                                <div class="title">Chapters</div>
                                <div class="sub-txt"></div>
                            </div>
                            <div class="txt-count">
                                <div><span class="count">51</span></div>
                                <div class="title">Ethnicities</div>
                                <div class="sub-txt">Represented</div>
                            </div>
                            <div class="txt-count">
                                <div><span class="count">26</span></div>
                                <div class="title">Languages</div>
                                <div class="sub-txt">Spoken</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="img-holder">
                <img src="{{ asset('public/images/member-right-bg.png') }}" alt="Members Image">
            </div>
        </section>
        {{-- End of Become Member --}}

        {{-- Start  --}}
        <section class="partnership wrapper image-background margin-top60">
            <img src="{{ asset('public/images/partnership-img-bg.jpg') }}" alt="Partnership BG">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-6">
                        <div class="title">
                            <h2>Partnership</h2>
                            <p>We have more than 30 partners from<br> <b>Local</b> to <b>International</b>.</p>
                        </div>
                    </div>
                    <div class="offset-1 col-md-5">
                        <div class="partnership-level">
                            <div class="partnership-level--item">
                                <div class="icon jade"></div>
                                <div class="content-txt">
                                    <h3>Jade Level</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi.</p>
                                </div>
                            </div>
                            <div class="partnership-level--item">
                                <div class="icon diamond"></div>
                                <div class="content-txt">
                                    <h3>Diamond Level</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi.</p>
                                </div>
                            </div>
                            <div class="partnership-level--item">
                                <div class="icon emerald"></div>
                                <div class="content-txt">
                                    <h3>Emerald Level</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisi.</p>
                                </div>
                            </div>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn--secondary margin-right20">Learn More</a> <a href="#" class="btn btn--primary">Become a Member</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Partnership --}}

        {{-- Start  --}}
        <section class="growing wrapper margin-top40">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Growing Opportunities</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut<br> labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                    </div>
                </div>
                <div class="row margin-top40">
                    <div class="col-md-6">
                        <div class="list padding-top60">
                            <p>Asian American population is <b>22.5 million</b></p>
                            <p><b>72% population growth</b> from 2000 to 2015</p>
                            <p>By <b>2060</b>, there is going to be <b>100% increase</b> in this number</p>
                            <p><b>Chinese, Indian</b> and <b>Filipino</b> for  <b>57%</b> of the Asian Americans</p>
                            <p><b>The buying power</b> of this group is said to <b>exceed $1 trillion</b> with a <b>33% increase by 2022</b></p>
                        </div>
                        <div class="btn-wrap text-center margin-top80">
                            <a href="#" class="btn btn--secondary margin-right20">Learn More</a> <a href="#" class="btn btn--primary">Become a Member</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('public/images/grow-statline.png') }}" alt="Statline Image">
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Growing Opportunities --}}

        {{-- Start  --}}
        <section class="chapters wrapper image-background margin-top90">
            <img src="{{ asset('public/images/map-bg.jpg') }}" alt="Chapters BG">
            <div class="container-max">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="map-content">
                            <h2>Chapters</h2>
                            <div class="btn-wrap">
                                <a href="#" class="btn btn--secondary">View All Chapters</a>
                            </div>
                        </div>
                        <div class="map"></div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Chapters --}}

        {{-- Start  --}}
        <section class="feat-members wrapper margin-both90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-7">
                        <h2>Featured Members</h2>
                    </div>
                    <div class="col-md-5 padding-top20">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="feat-members-slider">
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img1.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img2.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img3.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img4.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img5.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                            <div class="feat-members-slider--item">
                                <a href="#">
                                    <div class="image-holder">
                                        <img src="{{ asset('public/images/member-img1.jpg') }}" alt="Member Image">
                                    </div>
                                    <div class="desc-txt">
                                        <div class="name">May Marcus</div>
                                        <div class="chapter">San Diego Chapter</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- End of Feaured Members --}}

        {{-- Start  --}}
        <section class="sponsors wrapper margin-both90">
            <div class="container-max">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Sponsors</h2>
                    </div>
                </div>
            </div>
            <div class="sponsor-logo">
                <img src="{{ asset('public/images/sponsors-logos.png') }}" alt="Sponsors Image">
            </div>
        </section>
        {{-- End of Sponsors --}}

    </main>

    @include('front.layouts.sections.footer')
</section>