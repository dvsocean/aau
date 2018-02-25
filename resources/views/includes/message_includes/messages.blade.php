@if (Session::has('info_message'))
    <div class="alert alert-info text-center">{{ Session::get('info_message') }}</div><br>
@endif

@if (Session::has('error_message'))
    <div class="alert alert-danger text-center">{{ Session::get('error_message') }}</div><br>
@endif