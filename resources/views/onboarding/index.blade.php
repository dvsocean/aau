<!DOCTYPE HTML>
<html>
<head>
    <title>Onboarding</title>
   @include('includes.site_wide_header.header')
</head>
<body>

<!-- Header -->
@include('includes.header_nav_bar.header_nav')
<!-- Header -->

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <!--SESSION MESSAGES-->
        @include('includes.message_includes.messages')
        <!--SESSION MESSAGES-->
        <h2>Onboarding</h2>
        <p>This is a good place to start</p>
    </header>
    <div class="row 150%">
        <div class="4u 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <a href="#" class="image fit"><img src="{{asset('images/onboarding/checklist.jpg')}}" alt="" /></a>
                    <h3>Verys Onboarding Checklist</h3>
                    <p>This is intended to be a master checklist to be used to help new members of the AA team to get
                        them up to speed as quickly as possible.
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">Lets begin</a></li>
                        </ul>
                    </footer>
                </section>
                <hr />
                <section>
                    <a href="#" class="image fit"><img src="{{asset('images/onboarding/boarding.jpg')}}" alt="" /></a>
                    <h3>AA.com Onboarding Checklist</h3>
                    <p>Checklist for new employees to get started both on and off-site.</p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">Lets begin</a></li>
                        </ul>
                    </footer>
                </section>
                <hr />
                <section>
                    <a href="#" class="image fit"><img src="{{asset('images/onboarding/acronyms.jpg')}}" alt="" /></a>
                    <h3>AA Acronyms</h3>
                    <p>
                        Have you been hit with a number of abbreviations and acronyms you don’t know? 
                        This will help!
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">Show me</a></li>
                        </ul>
                    </footer>
                </section>
                <hr />
                <section>
                    <a href="#" class="image fit"><img src="{{asset('images/onboarding/countries.jpg')}}" alt="" /></a>
                    <h3>List of countries</h3>
                    <p>
                        Explanation of ITA, vs Amadeus and the counts AA.com supports on these systems.
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="#" class="button small alt">I want to know</a></li>
                        </ul>
                    </footer>
                </section>
                <hr />
            </section>
            <!-- Sidebar -->

        </div>
        <div class="8u$ 12u$(medium) important(medium)">


            <!-- Content -->
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <!--PLACEHOLDER-->
                        </div>
                        <div class="col-md-6">
                            <a href="#" class="image fit"><img src="{{asset('images/onboarding/getCredentials.png')}}" alt="" /></a>
                        </div>
                        <div class="col-md-1">
                            <!--PLACEHOLDER-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-center">Get Credentials</h3>
                            <p class="text-center">The keys to success!</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr />
            <br>

            <section id="content">
                <a href="#" class="image fit"><img src="{{asset('images/onboarding/timesheets.jpg')}}" alt="" /></a>
                <h3>Time sheet process</h3>
                <p>
                    Tick-tock, tick-tock. It’s time you learn about your time sheets.
                </p>
            </section>

            <hr />
            <br>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <a href="#" class="image fit">
                                <img src="{{asset('images/onboarding/useful_links.jpg')}}" alt="" />

                            </a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-center">Useful links</h3>
                            <p class="text-center">Need some information? This will link you to it.</p>
                        </div>
                    </div>
                </div>
            </section>

            <hr />
            <br>

            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <!--PLACEHOLDER-->
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="image fit"><img src="{{asset('images/onboarding/informative_docs.jpg')}}" alt="" /></a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="image fit"><img src="{{asset('images/onboarding/informative_docs2.jpeg')}}" alt="" /></a>
                        </div>
                        <div class="col-md-1">
                            <!--PLACEHOLDER-->
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">
                            <h3 class="text-center">AA informative documents</h3>
                            <p class="text-center">A list of informative documents that have been distributed within AA.com.</p>
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