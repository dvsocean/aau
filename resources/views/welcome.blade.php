<!DOCTYPE HTML>
<html>
<head>
    <title>AAUniversity</title>
    @include('includes.site_wide_header.header')
</head>
<body>

<!-- Header -->
@include('includes.header_nav_bar.header_nav')
<!-- Header -->

<!--BANNER-->
@include('includes.welcome_page.banner')
<!--BANNER-->

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
@include('includes.site_wide_footer.footer')
<!-- Footer -->

</body>
</html>