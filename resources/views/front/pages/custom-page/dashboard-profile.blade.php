<section class="{{ auth()->user()->chapter_id == 0 ? 'page page--dashboard page--dashboard--profile' : 'page-chapter page-chapter--dashboard' }}">

    {{-- @include('front.layouts.sections.header') --}}

    @if(auth()->user()->chapter_id == 0)
        @include('front.layouts.sections.header')
    @else
        @include('front.layouts.sections.chapter.header_chapter')
    @endif
    
    {{-- @include('front.pages.custom-page.sections.banner') --}}


<main class="main-content">

    @include('front.pages.custom-page.sections.dashboard-menu')
    
    <section class="dashboard-nav d-none">

        <div class="dashboard-navigation">
            <div class="dashboard-navigation__wrapper">
                <div class="dashboard-navigation__item">
                    {{-- <ul>
                        <li><a href="#"> Dashboard</a> </li>
                        <li><a href="#"> Events</a> </li>
                        <li><a href="#"> Profile</a> </li>
                        <li><a href="#"> Membership Details</a> </li>
                        <li><a href="#"> Support</a> </li>
                    </ul> --}}
    
                    <nav class="navbar-bar">
                        <ul class="navbar-bar__wrapper">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="{{ route('customer.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                                <div class="dropdown-menu">
                                    <ul class="sub-menu">
                                        <li>
                                            <a class="nav-link" href="#"> Sub menu 1</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.dashboard') }}">Events</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                    Profile
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('dashboard-memberdirectory-detail') }}" {{--data-toggle="dropdown"--}}>
                                    Membership Details
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" {{--data-toggle="dropdown"--}}>
                                    Support
                                </a>
                            </li>
                        </ul>
                    </nav>
    
    
                </div>
            </div>
        </div>
    
    </section>



    <section class="dashboard-content dashboard-content__profile" data-aos="fade-up">
        <div class="container-max">
            <div class="row">


                <div class="col-md-12">

                    @include('front.pages.custom-page.sections.element-profile')

                </div>

            </div>

        </div>
    </section>



    @include('front.pages.custom-page.sections.follow-us')

</main>
@include('front.layouts.sections.footer')
</section>