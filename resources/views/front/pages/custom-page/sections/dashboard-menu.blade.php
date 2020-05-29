<section class="dashboard-nav">

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
                
                @if(!isset($active))
                    @php($active = '')
                @endif

                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                        <li class="nav-item {{ $active == 'dashboard' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('customer.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                            {{-- <div class="dropdown-menu">
                                <ul class="sub-menu">
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                      
                        <li class="nav-item {{ $active == 'events' ? 'active' : '' }}">
                            {{-- <a class="nav-link" href="{{ url( (auth()->user()->chapter == 'national' ? '' : auth()->user()->chapter_slug) . '/events' ) }}">Events</a> --}}
                            <a class="nav-link" href="{{ route('customer.dashboard.events') }}">Events</a>
                        </li>

                        <li class="nav-item {{ $active == 'profile' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('customer.dashboard.profile') }}" {{--data-toggle="dropdown"--}}>
                                Profile
                            </a>
                        </li>
                       
                        <li class="nav-item {{ $active == 'member_directory' ? 'active' : '' }}">
                            {{-- <a class="nav-link" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory</a> --}}

                            <a class="nav-link" href="#">Membership Details</a> 
                        </li>
                
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('dashboard-memberdirectory-detail') }}" {{--data-toggle="dropdown"--}}>
                                Membership Details
                            </a>
                        </li> -->
                        <li class="nav-item {{ $active == 'support' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('customer.dashboard.support') }}" {{--data-toggle="dropdown"--}}>
                                Support
                            </a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>

</section>


<section class="dashboard-mobile">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">

                <div class="dropdown">
                    <button class="btn btn-secondary" type="button" id="dashboard-mobile-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dashboard Menu
                        <i class="fas fa-bars"></i>
                    </button>
                    @if(!isset($active))
                        @php($active = '')
                    @endif
                    <div class="dropdown-menu" aria-labelledby="dashboard-mobile-menu">
                        <a class="nav-link dropdown-item" href="{{ route('customer.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                        <a class="nav-link dropdown-item" href="{{ route('customer.dashboard.events') }}">Events</a>
                        <a class="nav-link dropdown-item" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory</a>
                        <a class="nav-link dropdown-item" href="{{ route('customer.dashboard.profile') }}" {{--data-toggle="dropdown"--}}>
                            Profile
                        </a>
                        <a class="nav-link dropdown-item" href="{{url('support')}}" {{--data-toggle="dropdown"--}}>
                            Support
                        </a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>