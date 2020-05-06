<section class="page page--media">
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
                            <h1>Media</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-banner__image image-background">
            <img src="{{ url('public/images/media-banner.jpg') }}">
        </div>
    </section>


    <main class="main-content">


        <section class="media-section">
            <div class="container-max">

                <div class="col-lg-12">

                    <div class="search-member-directory">
                        {{  Form::open([
                            'method' => 'GET',
                            'id' => '',
                            'route' => ['customer.dashboard.member_directory.search'],
                            'class' => ''
                            ])
                        }}
                                <div class="search-member-directory__wrapper container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Keyword Search" name="keyword" value="{{ Request::get('keyword') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Tags" name="Tags" value="{{ Request::get('name') }}">
                                            </div>
                                        </div>
                                      
                                        <div class="col-md-3">
                                           <ul class="inline-flex inline-flex__extend">
                                               <li>
                                                    <div class="advance-tool">
                                                        <a href="#">
                                                            <i class="fas fa-cog"></i> Advanced
                                                        </a>
                                                    </div>
                                               </li>
                                               <li>
                                                    <button class="btn btn--secondary">search</button> 
                                               </li>
                                           </ul>
                                        </div>
                                    </div>
                                    <div class="row mt-3 advance-search {{ Request::get('company') || Request::get('chapter') || Request::get('designation') ? '' : 'd-none' }}">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Company" name="company" value="{{ Request::get('company') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Chapter" name="chapter" value="{{ Request::get('chapter') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <input type="text" placeholder="Designation" name="designation" value="{{ Request::get('designation') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>

                </div>


                <div class="col-lg-12">

                    {{-- media-tab --}}
                    <div class="media-tab">

                        @php( $media_category = \App\Models\MediaCategory::all() )

                        <ul class="nav nav-tabs media-tab__tab" id="myTab" role="tablist">
                            @foreach($media_category as $category)
                            <li class="nav-item">
                                <a class="nav-link {{ $loop->first ? 'active' : '' }}" id="{{$category->slug}}-view-tab" data-toggle="tab" href="#{{$category->slug}}-view"
                                    role="tab" aria-controls="{{$category->slug}}-view" aria-selected="true">{{ $category->name }}</a>
                            </li>
                            @endforeach                            
                        </ul>

                        <div class="tab-content media-tab__content" id="myTabContent">
                            @foreach($media_category as $category)
                            <div class="tab-pane media-tab__item fade {{ $loop->first ? 'show active' : '' }}" id="{{$category->slug}}-view" role="tabpanel"
                                aria-labelledby="{{$category->slug}}-view">
                                <div class="{{$category->slug}} container">
                                    <div class="{{$category->slug}}__list row moreWebinar">
                                        
                                        @php( $media = \App\Models\Webinars::where('media_category_id', $category->id)->get() )

                                        @forelse($media as $media_item)
                                        <div class="col-lg-4 col-md-4 moreWebinar__item moreWebinar">

                                            {{-- media-thumbnail --}}
                                            <div class="media-thumbnail">
                                                <div class="media-thumbnail__featured">
                                                    @if($media_item->link != '#')
                                                    <iframe width="560" height="315" src="{{$media_item->link}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    @endif
                                                </div>
                                                <div class="media-thumbnail__title">
                                                    <h3>{{ $media_item->title }}</h3>
                                                </div>
                                                <div class="media-thumbnail__button">
                                                    <h4>Download {{$category->name}} Assets: </h4>
                                                    <a href="#" class="btn btn--primary">Presentation Slides </a>
                                                </div>
                                            </div>
                                            {{-- media-thumbnail --}}

                                        </div>
                                        @empty
                                        <h3 class="text-danger font-weight-bold text-center w-100 my-5">No {{$category->name}}.</h3>
                                        @endforelse
                                        
                                    </div>

                                    <div class="{{$category->slug}}__bottom row">
                                        <div class="col-lg-12 col-md-12 text-center">
                                            <a href="#" id="loadMore" class="btn btn--primary"> load more</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                     {{-- media-tab --}}

                </div>
            </div>
        </section>

        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>