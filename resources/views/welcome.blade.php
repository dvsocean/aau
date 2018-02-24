<!DOCTYPE HTML>
<html>
<head>
    <title>AAUniversity</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
</head>
<body>

<!-- Header -->
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
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
                @endauth
            @endif


            <li class="special">
                <a href="#menu" class="icon fa-bars">Menu</a>
                <div id="menu">
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>
                            <span>Layouts</span>
                            <ul>
                                <li><a href="left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="no-sidebar.html">No Sidebar</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </li>
                        <li><a href="elements.html">Elements</a></li>
                        <li><a href="#">Sign Up</a></li>
                        <li><a href="#">Log In</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>
</header>

<!-- Banner -->
<section id="banner">
    <div class="inner">
        <h2>American Airlines University</h2>
        <ul class="actions">
            <li><a href="#" class="button big special">Onboarding</a></li>
        </ul>
        <p class="footnote"><a href="#">Forgot password?</a></p>
    </div>
    <a href="#one" class="more scrolly">Learn more ...</a>
</section>

<!-- Main -->
<div id="main" class="container">

    <!-- One -->
    <section id="one" class="feature major">
        <span class="icon alt major fa-paper-plane"></span>
        <h2>Adipiscing lacus accumsan odio massa.</h2>
        <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci. Arcu porttitor massa.</p>
    </section>

    <!-- Two -->
    <section id="two" class="feature">
        <div class="row">
            <div class="4u 12u$(medium)">
                <h2>Sed amet integer<br />
                    interdum consequat.</h2>
                <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante sed praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem ipsum porttitor turpis orci. Arcu porttitor massa sed lobortis non commodo ante lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Ipsum consequat</a></li>
                </ul>
            </div>
            <div class="8u$ 12u$(medium)">
                <ul class="major-icons row">
                    <li class="4u 6u(small) 12u$(xsmall)">
                        <span class="icon alt major fa-camera"></span>
                        <p>Praesent sed adipiscing</p>
                    </li>
                    <li class="4u 6u$(small) 12u$(xsmall)">
                        <span class="icon alt major fa-clock-o"></span>
                        <p>Amet accumsan gravida</p>
                    </li>
                    <li class="4u$ 6u(small) 12u$(xsmall)">
                        <span class="icon alt major fa-cloud"></span>
                        <p>Risus aliquet feugiat</p>
                    </li>
                    <li class="4u 6u$(small) 12u$(xsmall)">
                        <span class="icon alt major fa-code"></span>
                        <p>Accumsan rhoncus</p>
                    </li>
                    <li class="4u 6u(small) 12u$(xsmall)">
                        <span class="icon alt major fa-database"></span>
                        <p>Vitae primis placerat</p>
                    </li>
                    <li class="4u$ 6u$(small) 12u$(xsmall)">
                        <span class="icon alt major fa-bolt"></span>
                        <p>Integer nisl faucibus</p>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Three -->
    <section id="three" class="feature">
        <div class="row">
            <div class="8u 12u$(medium)">
                <div class="box alt">
                    <div class="row uniform 50%">
                        <div class="6u 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Praesent sed adipiscing</h3>
                                <img src="images/pic01.jpg" alt="" />
                            </a>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Amet accumsan gravida</h3>
                                <img src="images/pic02.jpg" alt="" />
                            </a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Risus aliquet feugiat</h3>
                                <img src="images/pic03.jpg" alt="" />
                            </a>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Accumsan rhoncus</h3>
                                <img src="images/pic04.jpg" alt="" />
                            </a>
                        </div>
                        <div class="6u 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Vitae primis placerat</h3>
                                <img src="images/pic05.jpg" alt="" />
                            </a>
                        </div>
                        <div class="6u$ 12u$(xsmall)">
                            <a href="#" class="image fit">
                                <h3 class="caption">Integer nisl faucibus</h3>
                                <img src="images/pic06.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="4u$ 12u$(medium) important(medium)">
                <h2>Cubilia et lorem<br />
                    feugiat consequat.</h2>
                <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci. Arcu porttitor massa.</p>
                <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci. Arcu porttitor massa. Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Ipsum consequat</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Four -->
    <section id="four" class="feature major">
        <h2>Ipsum commodo blandit.</h2>
        <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia.</p>
        <ul class="actions">
            <li><a href="#" class="button big special">Ante ornare adipiscing</a></li>
        </ul>
    </section>

</div>

<!-- Footer -->
<footer id="footer">
    <div class="container">
        <div class="row">
            <section class="4u 12u$(medium) about">
                <h2>Augue eleifend<br />
                    faucibus et cubilia.</h2>
                <p>Arcu porttitor ut massa adipiscing nascetur varius lorem ipsum ante ac vestibulum lacinia ante praesent. Iaculis porttitor turpis orci arcu et orci. Lobortis non commodo ante lorem ipsum porttitor turpis orci. Arcu porttitor massa lorem ipsum dolor amet consequat etiam.</p>
                <ul class="actions">
                    <li><a href="#" class="button">Erat vestibulum</a></li>
                </ul>
            </section>
            <section class="4u 6u(medium) 12u$(small)">
                <h3>Updates</h3>
                <ul class="updates">
                    <li>
                        <p><a href="#">Ante ac vestibulum lacinia praesent adipiscing nascetur consequat lorem ipsum dolore.</a></p>
                        <span class="timestamp">Posted 2 hours ago</span>
                    </li>
                    <li>
                        <p><a href="#">Mi eu gravida tortor. Commodo lacinia ut ante placerat. In lobortis ac accumsan tortor.</a></p>
                        <span class="timestamp">Posted 4 hours ago</span>
                    </li>
                    <li>
                        <p><a href="#">Erat faucibus lacinia orci vestibulum massa accumsan ac vitae turpis praesent non.</a></p>
                        <span class="timestamp">Posted 8 hours ago</span>
                    </li>
                </ul>
            </section>
            <section class="4u$ 6u$(medium) 12u$(small)">
                <h3>Get in touch</h3>
                <ul class="labeled-icons">
                    <li>
                        <h4 class="icon alt fa-home"><span class="label">Address</span></h4>
                        <span>1234 Somewhere Road #80486<br />
									Nashville, TN 00000</span>
                    </li>
                    <li>
                        <h4 class="icon alt fa-phone"><span class="label">Phone</span></h4>
                        <span>(800) 555-0000 x12345</span>
                    </li>
                    <li>
                        <h4 class="icon alt fa-envelope"><span class="label">Email</span></h4>
                        <a href="#">hello@untitled.tld</a>
                    </li>
                    <li>
                        <h4 class="icon alt fa-facebook"><span class="label">Facebook</span></h4>
                        <a href="#">facebook.com/untitled-tld</a>
                    </li>
                    <li>
                        <h4 class="icon alt fa-twitter"><span class="label">Twitter</span></h4>
                        <a href="#">twitter.com/untitled-tld</a>
                    </li>
                </ul>
            </section>
        </div>
    </div>
    <div class="copyright container">
        <p>&copy; Untitled. All rights reserved.</p>
        <ul class="menu">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
    </div>
</footer>

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>

</body>
</html>