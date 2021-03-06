<section class="page page--board">
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
                            <!-- <h3>Meet Our </h3>
                            <h1>Delegate <br>
                                Board</h1> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="sub-banner__image image-background">
            <img src="{{ url($page->attachment) }}">
            <!-- <img src="{{ url('public/images/delagate-banner.jpg') }}"> -->
        </div>
    </section>


    <main class="main-content">


        <section class="executive-board" data-aos="fade-up">
            <div class="container-max">
                <div class="col-lg-12">

                    <div class="board-thumbnail row">
                        @php($delegates = \App\Models\BoardMember::delegates()->where('is_active',1)->orderBy('order')->get())
                        @if($delegates->isEmpty())
                            <h3 class="text-danger font-weight-bold text-center w-100 my-5">No Delegates Members.</h3>
                        @endif
                        @foreach($delegates as $delegate)
                            <div class="board-thumbnail__item col-lg-3 col-md-6">
                                @if(!empty($delegate->bio)) <a href="{{ $delegate->url }}"> @endif
                                    <div class="board-thumbnail__image image-background">
                                        <img src="{{ $delegate->attachment ? optional($delegate->attachment)->url : asset('public/images/no-image.jpg') }}"
                                             alt="Member Image">
                                    </div>
                                    <div class="board-thumbnail__details">
                                        <h5>{{ $delegate->name }}</h5>
                                        <h6>{{ $delegate->position }}</h6>
                                    </div>
                                @if(!empty($delegate->bio)) </a> @endif
                            </div>
                        @endforeach                        

                    <!-- for reference
                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/no-image.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Michael Acevedo </h5>
                        <h6>Mortgage Committee Vice Chair</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/delagate-Bryan-Ahn.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Bryan Ahn </h5>
                        <h6>Board Member</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/delagate-Brian-Almero.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Brian Almero </h5>
                        <h6>Las Vegas President</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-Keith-Andrews.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Keith Andrews </h5>
                        <h6>Greater Birmingham President</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}




                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-LC-Beh.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>LC Beh</h5>
                        <h6>Greater Los Angeles President</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}

                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-JC-Caceres.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>JC Caceres</h5>
                        <h6>Greater Miami President</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-Kyle-Chan.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Kyle Chan</h5>
                        <h6>Central New Jersey</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-Lynman-Chao.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Lynman Chao </h5>
                        <h6> Membership Benefits Committee Vice-Chair/ San Francisco Peninsula
                        </h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-Stephen-Chow.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Stephen Chow</h5>
                        <h6>Greater Toronto President</h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}



                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                    <div class="board-thumbnail__image image-background">
                        <img src="{{ asset('public/images/deleg-Gregg-Christensen.jpg') }}" alt="Member Image">
                    </div>
                    <div class="board-thumbnail__details">
                        <h5>Gregg Christensen
                        </h5>
                        <h6>New York Manhattan President

                        </h6>
                    </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}


                    {{-- board-thumbnail --}}
                    <div class="board-thumbnail__item col-lg-3 col-md-6">
                    <a href="{{url('board-detail')}}">
                        <div class="board-thumbnail__image image-background">
                            <img src="{{ asset('public/images/exec-DickLee.jpg') }}" alt="Member Image">
                        </div>
                        <div class="board-thumbnail__details">
                            <h5>Andy Chung
                            </h5>
                            <h6>Silicon Valley President
                                </h6>
                        </div>
                    </a>
                    </div>
                    {{-- board-thumbnail --}}
                    -->


                    </div>

                </div>
            </div>
        </section>
         
        @include('front.pages.custom-page.sections.follow-us')

    </main>
    @include('front.layouts.sections.footer')
</section>