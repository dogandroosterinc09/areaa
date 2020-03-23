<section class="page page--sponsors">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            <h3>Areaa</h3>
                            <h1>Sponsors</h1>
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

        
    {{-- story section  --}}
    <section class="sponsors">
        <div class="container-max">
            <div class="row">

                <div class="col-md-12">
                    <div class="filter-stone">
                        <ul class="inline-block">
                            @foreach( section('Sponsors Filters.data') as $data )
                            <li class="filter-stone--{{ $data->icon }}"><a href="{{ $data->link }}"> <span> 1 </span>- {{ $data->text }} </a> </li>
                            @endforeach
                            <!-- <li class="filter-stone--jade"><a href="#"> <span> 1 </span>- Jade </a> </li>
                            <li class="filter-stone--diamond"><a href="#"> <span> 1 </span>- Diamond </a> </li>
                            <li class="filter-stone--emerald"><a href="#"> <span> 1 </span>- Emerald </a> </li>
                            <li class="filter-stone--opal"><a href="#"> <span> 1 </span>- Opal </a> </li>
                            <li class="filter-stone--ruby"><a href="#"> <span> 1 </span>- Ruby </a> </li>
                            <li class="filter-stone--pearl"><a href="#"> <span> 1 </span>- Pearl </a> </li> -->
                        </ul>
                    </div>
                </div>


                <div class="col-md-4">
                        <div class="sponsors__content">
                            <h2>{{ section('Sponsors.data.first.title') }}</h2>
                            <p>{{ section('Sponsors.data.first.content') }}</p>

                            <div class="btn-group">
                                    <a href="{{ section('Sponsors.data.first.btn_link') }}" class="btn btn btn--primary">{{ section('Sponsors.data.first.btn_text') }}</a>
                            </div>
                        </div>
                </div>

                <div class="col-md-8">
                    <div class="logo-display">
                        <div class="logo-display__single">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="sponsor-thumbnail">
                                        <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ section('Top Sponsor.data.first.badge_icon') }}">  </div>
                                        <img src="{{ url('public/images/sponsor0.jpg') }}" alt="chapter title" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        <div class="logo-display__col3">
                            <div class="row">
                                @foreach( section('Other Sponsors.data') as $data )
                                <div class="col-md-4">
                                    <div class="sponsor-thumbnail">
                                        <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $data->badge_icon }}">  </div>
                                        <img src="{{ $data->image }}" alt="{{ $data->alt_text }}" class="img-fluid">
                                    </div>
                                </div>
                                @endforeach
                                <!-- <div class="col-md-4">
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
                                </div> -->
                            </div>
                        </div>
                    </div>
                   
                </div>

        
            </div>
        </div> {{-- end of default-content--row --}}
    </section> {{-- end of default-content --}}

       
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>