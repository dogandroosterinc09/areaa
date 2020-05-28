<section class="dashboard-nav" data-aos="fade-up">
    <div class="dashboard-navigation">
        <div class="dashboard-navigation__wrapper">
            <div class="dashboard-navigation__item">

                <nav class="navbar-bar">
                    <ul class="navbar-bar__wrapper">
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url($chapter['slug']) }}">Home</a>
                            </li> --}}
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url($chapter['slug'].'/about-us') }}">About Us</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url($chapter['slug'].'/events') }}">Events</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url($chapter['slug'].'/leadership-board') }}">Leadership</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url($chapter['slug'].'/contact-us') }}">Contact Us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="{{ url($chapter['slug'].'/login') }}">Login</a>
                            </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
</section>
