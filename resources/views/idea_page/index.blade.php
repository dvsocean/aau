<!DOCTYPE HTML>
<html>
<head>
    <title>Upload an idea</title>
    <!--HEADER-->
@include('includes.site_wide_header.header')
<!--HEADER-->

    <!--DROPZONE FILES-->
@include('includes.dropzone.dropzone_js_css')
<!--DROPZONE FILES-->
</head>
<body>

<!-- HEADER_NAV-->
@include('includes.header_nav_bar.header_nav')
<!-- HEADER_NAV-->


<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>Have an idea? Upload it here.</h2>
        <p>We would love to see it and we will make sure that many people benefit from it.</p>
        <br>
        <!--MESSAGES-->
    @include('includes.message_includes.messages')
    <!--MESSAGES-->
    </header>
    <div class="row 150%">
        <div class="8u 12u$(medium)">

            <!-- Content -->
            <section id="content">
                <a href="#" class="image fit"><img src="images/pic08.jpg" alt="" /></a>

                <h3>Drop your ideas here</h3>
                <form action="{{route('idea_storage')}}" id="my-awesome-dropzone" method="POST" class="dropzone">
                    {{csrf_field()}}
                </form>

                <h3>Wheels are always turning..</h3>
                <p>
                    and if metal sharpens metal we could also learn from each other. Submit documents and photographs
                    so we can check them out and implement them. Many have helped improve this site and there are many
                    more to come. We don't accept script or HTML files, only documents and photos.
                </p>

                <div class="table-wrapper">
                    <table>
                        <tr>
                            <td>
                                Picture
                            </td>

                            <td>
                                jpg
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Picture
                            </td>
                            <td>
                                jpeg
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Picture
                            </td>
                            <td>
                                png
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Graphics Interchanges Format
                            </td>
                            <td>
                                gif
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Word Document
                            </td>
                            <td>
                                docx
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Note pad
                            </td>
                            <td>
                                txt
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Excel Document
                            </td>
                            <td>
                                xlxs
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Power Point Document
                            </td>
                            <td>
                                ppt
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Portable Document Format
                            </td>
                            <td>
                                pdf
                            </td>
                        </tr>
                    </table>
                </div>
            </section>

        </div>
        <div class="4u$ 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-responsive" src="{{asset('images/idea_page/idea.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <h3>Beautiful minds</h3>
                    <p>
                        Ideas have been shared, most have been implemented so help us grow. The best way
                        through American Airlines is not to go through it but to grow through it.
                    </p>
                    <footer>
                        <ul class="actions">
                            <li><a href="{{route('statistics')}}" class="button small alt">Check it out</a></li>
                        </ul>
                    </footer>
                </section>
            </section>

        </div>
    </div>
</div>

<!-- Footer -->
@include('includes.site_wide_footer.footer')
<!-- Footer -->

</body>
</html>
