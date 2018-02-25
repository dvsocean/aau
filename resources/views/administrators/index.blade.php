<!DOCTYPE HTML>
<html>
<head>
    <title>Administrators</title>
    @include('includes.site_wide_header.header')
</head>
<body>
<!-- Header -->
@include('includes.header_nav_bar.header_nav')
<!-- Header -->
<!--GOOGLE CHART API-->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<!--GOOGLE CHART API-->

<?php
use App\Idea;
use Illuminate\Support\Facades\DB;
$records = DB::table('ideas')->get();
?>

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>Administration</h2>
        <p><!--PLACEHOLDER--></p>
    </header>
    <div class="row 150%">
        <div class="8u 12u$(medium)">

            <!-- Content -->
            <section id="content">
                <a href="#" class="image fit"><img src="images/pic08.jpg" alt="" /></a>
                <h3>Databse Files</h3>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <td>
                                <b>User ID</b>
                            </td>
                            <td>
                                <b>Name</b>
                            </td>
                            <td>
                                <b>Size</b>
                            </td>
                            <td>
                                <b>Type</b>
                            </td>
                        </thead>
                        @foreach($records as $record)
                            <tr>
                                <td>
                                    {{$record->user_id}}
                                </td>
                                <td>
                                    <a href="{{$record->path}}" download>{{$record->file}}</a>
                                </td>
                                <td>
                                    {{$record->size}}
                                </td>
                                <td>
                                    {{$record->type}}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </section>

        </div>
        <div class="4u$ 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <h3>Control panel</h3>
                    <a href="{{route('new_grad')}}" class="button special icon fa-male">New user</a>

                </section>
                <hr />
                <section>
                    <a href="#" class="image fit"><img src="images/pic09.jpg" alt="" /></a>
                    <h3>Statistics</h3>

                    <?php
                    $jpg = Idea::where('type', 'jpg')->get(['type']);
                    $docx = Idea::where('type', 'docx')->get(['type']);
                    $txt = Idea::where('type', 'txt')->get(['type']);
                    $png = Idea::where('type', 'png')->get(['type']);
                    $jpeg = Idea::where('type', 'jpeg')->get(['type']);
                    ?>

                    <!--CONTAINER-->
                    <div id="piechart"></div>
                    <!--CONTAINER-->

                    <!-- JS API-->
                    <script type="text/javascript">
                        google.charts.load('current', {'packages':['corechart']});
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([
                                ['Task', 'Uploaded files'],
                                ['JPG', <?php echo $jpg->count(); ?>],
                                ['DOCX', <?php echo $docx->count(); ?>],
                                ['TXT', <?php echo $txt->count(); ?>],
                                ['PNG', <?php echo $png->count(); ?>],
                                ['JPEG', <?php echo $jpeg->count(); ?>]

                            ]);
                            var options = {
                                title: 'Activity',
                                backgroundColor: 'transparent',
                                is3D: true,
                                pieSliceText: "none"
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                            chart.draw(data, options);
                        }
                    </script>
                    <!-- JS API-->

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