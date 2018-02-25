<!DOCTYPE HTML>
<html>
<head>
    <title>Statistics</title>
    <!--HEADER-->
    @include('includes.site_wide_header.header')
    <!--HEADER-->
    <!--GOOGLE CHART API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!--GOOGLE CHART API-->
</head>
<body>

<!--HEADER-->
@include('includes.header_nav_bar.header_nav')
<!--HEADER-->

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>In our database today</h2>
        <p>Many came through American Airlines and left us their wisdom.</p>
        <br>
        @include('includes.message_includes.messages')
    </header>
    <div class="row 150%">
        <div class="4u 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <h3>Statistics</h3>


                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">Learn More</a></li>
                        </ul>
                    </footer>
                </section>
                <hr />
                <section>
                    <a href="#" class="image fit"><img src="images/pic08.jpg" alt="" /></a>
                    <h3>Amet Lorem Tempus</h3>
                    <p>Sed tristique purus vitae volutpat commodo suscipit amet sed nibh. Proin a ullamcorper sed blandit. Sed tristique purus vitae volutpat commodo suscipit ullamcorper sed blandit lorem ipsum dolore.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">Learn More</a></li>
                        </ul>
                    </footer>
                </section>
            </section>

        </div>
        <div class="8u$ 12u$(medium) important(medium)">

            <!-- Content -->
            <section id="content">
                <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                <h3>People who are crazy enough to think they can change an industry are the ones who do.</h3>
                <ul>
                    <li>Automated tests now display branch names</li>
                    <li>Elements are now located with By objects</li>
                    <li>List of acronyms has been established</li>
                    <li>Onboarding process documented for ease of learning</li>
                    <li>Automated tests built to run in parallel</li>
                </ul>
                <p class="pull-right">...and many others</p>
            </section>

            <br><br>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="#" class="image fit"><img src="{{asset('images/statistics_page/tryOrFail.jpg')}}" alt="" /></a>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>

<!-- Footer -->
@include('includes.site_wide_footer.footer')
<!-- Footer -->

</body>
</html>