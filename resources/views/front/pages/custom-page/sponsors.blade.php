<section class="page page--sponsors">
    @include('front.layouts.sections.header')
    {{-- @include('front.pages.custom-page.sections.banner') --}}


    {{-- need to dynamic this sub  --}}
    <section class="sub-banner" data-aos="fade-up">
        <div class="sub-banner__wrapper container-max">
            <div class="sub-banner__item">
                <div class="container-max sub-banner__content">
                    <div class="row">
                        <div class="col-md-12 sub-banner__content">
                            {!! $page->content !!}
                            <!-- <h3>Areaa</h3>
                            <h1>Sponsors</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/events-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">

        
    {{-- story section  --}}
    <section class="sponsors margin-m100" data-aos="fade-up">
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



                <?php
                // $otherSponsors = \App\Models\Section::findOrFail(28);
                // $otherSponsors = \App\Models\Section::where('id',28)->first();
                $other_sponsors = json_decode($page->other_content);
                // print_r($otherSponsors);
                // die('71');
                // Sponsors
                // $other_sponsors = array();

                $jades = array();
                $diamonds = array();
                $emeralds = array();
                $opals = array();
                $rubies = array();
                $pearls = array();

                foreach ($other_sponsors as $sponsor) {
                    // echo $sponsor->badge_icon.' - '.$sponsor->image_alt.'<br>';
                    if ($sponsor->badge_icon=='jade') {
                        array_push($jades, $sponsor);
                    }
                    if ($sponsor->badge_icon=='diamond') {
                        array_push($diamonds, $sponsor);
                    }
                    if ($sponsor->badge_icon=='emerald') {
                        array_push($emeralds, $sponsor);
                    }
                    if ($sponsor->badge_icon=='opal') {
                        array_push($opals, $sponsor);
                    }
                    if ($sponsor->badge_icon=='ruby') {
                        array_push($rubies, $sponsor);
                    }
                    if ($sponsor->badge_icon=='pearl') {
                        array_push($pearls, $sponsor);
                    }
                }
                // print_r($jades);
                // die('ln101');
                ?>
                <div class="col-md-8">
                    <div class="logo-display">
                        <div class="logo-display__single"><h5>Jade</h5>
                            <div class="row">
                                @foreach($jades as $jade)
                                    <div class="col-md-5">
                                        <div class="sponsor-thumbnail">
                                            {{-- <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $jade->badge_icon }}">  </div> --}}
                                            <img src="{{ asset($jade->image) }}" alt="{{ $jade->image_alt }}" class="img-fluid">
                                        </div>
                                    </div>
                                @endforeach
                                
                                {{-- <div class="col-md-5">
                                    <div class="sponsor-thumbnail">
                                        <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ section('Top Sponsor.data.first.badge_icon') }}">  </div>
                                        <img src="{{ url('public/images/sponsor0.jpg') }}" alt="chapter title" class="img-fluid">
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <hr>
                        <div class="logo-display__col3">
                            @if(!empty($diamonds))
                            <h5>Diamond</h5>
                            <div class="row">
                                @foreach( $diamonds as $diamond )
                                    @if(!empty($diamond->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            {{-- <div class="sponsor-thumbnail__badge sponsor-thumbnail__badge--{{ $diamond->badge_icon }}">  </div> --}}
                                            
                                            <a href="#" target="_new"><img src="{{ $diamond->image }}" alt="{{ $diamond->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($emeralds))
                            <h5>Emerald</h5>
                            <div class="row">
                                @foreach( $emeralds as $emerald )
                                    @if(!empty($emerald->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="#" target="_new"><img src="{{ $emerald->image }}" alt="{{ $emerald->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($opals))
                            <h5>Opal</h5>
                                @foreach( $opals as $opal )
                                    @if(!empty($opal->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="#" target="_new"><img src="{{ $opal->image }}" alt="{{ $opal->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($rubies))
                            <h5>Ruby</h5>
                                @foreach( $rubies as $ruby )
                                    @if(!empty($ruby->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="#" target="_new"><img src="{{ $ruby->image }}" alt="{{ $ruby->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                            @if(!empty($pearls))
                            <h5>Pearl</h5>
                                @foreach( $pearls as $pearl )
                                    @if(!empty($pearl->image))
                                    <div class="col-md-4">
                                        <div class="sponsor-thumbnail">
                                            <a href="#" target="_new"><img src="{{ $pearl->image }}" alt="{{ $pearl->image_alt }}" class="img-fluid"></a>
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                            @endif

                                {{--
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
                                --}} 

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