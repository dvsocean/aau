<header id="header">
    <h1><a href="index.html">AA.com University</a></h1>
    <nav id="nav">
        <ul>

            @if (Route::has('login'))
                @auth
                <li>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </li>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @else
                <li><a href="{{route('login')}}">Use your credentials to login</a></li>
                @endauth
            @endif


            <li class="special">
                <a href="#menu" class="icon fa-bars">Menu</a>
                <div id="menu">
                    <ul>
                        @if(Auth::check())
                            <span><b>Documentation</b></span>
                            <ul>
                                <li><a href={{route('onboarding')}}>Onboarding</a></li>
                                <li><a href="">Development</a></li>
                                <li><a href="">Release process</a></li>
                                <li><a href="">QA</a></li>
                                <li><a href="">Training</a></li>
                            </ul>
                            <span><b>Teams</b></span>
                            <ul>
                                <li><a href="">American Airlines</a></li>
                                <li><a href="">Verys at American</a></li>
                                <li><a href="">VicAArious</a></li>
                                <li><a href="">Scrumdogs</a></li>
                            </ul>

                            <span><b>Tools</b></span>
                            <ul>
                                <li><a href="">Release Management</a></li>
                                <li><a href="">PTO Calendar</a></li>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>

                            <li><a href=""><b>About AA</b></a></li>
                            @else
                            <li><a href="{{route('login')}}">Login</a></li>
                        @endif
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>