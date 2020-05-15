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
                            <a class="nav-link dropdown-toggle" href="{{ route('customer.dashboard') }}">Dashboard <span class="sr-only">(current)</span></a>
                            {{-- <div class="dropdown-menu">
                                <ul class="sub-menu">
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('customer.dashboard') }}">Events</a>
                        </li>
                       
                        <li class="nav-item {{ $active == 'member_directory' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('customer.dashboard.member_directory') }}">Membership Directory</a>
                        </li>
                        <li class="nav-item {{ $active == 'profile' ? 'active' : '' }}">
                            <a class="nav-link" href="{{ route('customer.dashboard.profile') }}" {{--data-toggle="dropdown"--}}>
                                Profile
                            </a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="{{ url('dashboard-memberdirectory-detail') }}" {{--data-toggle="dropdown"--}}>
                                Membership Details
                            </a>
                        </li> -->
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