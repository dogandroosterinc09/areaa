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

                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                        <li class="nav-item dropdown active">
                            <a class="nav-link" href="{{ url('chapter-homepage') }}">Home </a>
                            {{-- <div class="dropdown-menu">
                                <ul class="sub-menu">
                                    <li>
                                        <a class="nav-link" href="#"> Sub menu 1</a>
                                    </li>
                                </ul>
                            </div> --}}
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chapter-our-story') }}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chapter-events') }}">Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chapter-leadership') }}">Leadership</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chapter-contact-us') }}">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('chapter-login') }}">Log in</a>
                        </li>
                    </ul>
                </nav>


            </div>
        </div>
    </div>

</section>