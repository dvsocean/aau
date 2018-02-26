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
$records = Idea::paginate(10);
?>

<!-- Main -->
<div id="main" class="container">
    <header class="major">
        <h2>Administration</h2>
        <p><!--PLACEHOLDER--></p>
        <br>
        @include('includes.message_includes.messages')
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
                                <b>Byte size</b>
                            </td>
                            <td>
                                <b>Type</b>
                            </td>
                            <td>
                                <b>Action</b>
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
                                <td>
                                    <a href="{{url('/delete_file/'. $record->id)}}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="text-center">
                        <p>{{$records->links()}}</p>
                    </div>

                </div>
            </section>

        </div>
        <div class="4u$ 12u$(medium)">

            <!-- Sidebar -->
            <section id="sidebar">
                <section>
                    <a href="#" class="image fit"><img src="images/pic09.jpg" alt="" /></a>
                    <h3>Storage</h3>
                    <!--CHARTS API-->
                @include('includes.charts_api.charts_api_js')
                <!--CHARTS API-->
                </section>

                <section>
                    <h3>Actions</h3>
                    <br>
                    <a href="{{route('new_grad')}}" class="button special icon fa-male">New user</a>
                    <br><br>
                    <a href="" class="button special icon fa-book">Records</a>

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