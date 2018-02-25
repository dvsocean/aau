<!DOCTYPE html>
<html lang="en" >

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    @include('includes.login_page.header')
</head>

<body>

@if(Auth::check())
    <p>ALREADY LOGGED IN</p>
    @else
    <div class="wrapper">
        <form class="login login-form" role="form" action="{{ url('/login') }}" method="post">
            {{ csrf_field() }}
            <p class="title">Log in</p>
            <input type="text" placeholder="Email..." name="email" id="{{ $errors->has('email') ? ' has-error' : '' }}" value="{{ old('email') }}" autofocus/>
            @if ($errors->has('email'))
                <span class="danika_errors">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif
            <i class="fa fa-user"></i>
            <input type="password" name="password" placeholder="Password..." id="{{ $errors->has('password') ? ' has-error' : '' }}"/>
            @if ($errors->has('password'))
                <span class="danika_errors">
               <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <i class="fa fa-key"></i>
            <a href="#">Forgot your password?</a>
            <button class="log_me_in">
                <i class="spinner"></i>
                <span class="state">Log in</span>
            </button>
        </form>

        <a href="{{route('homePage')}}" class="nevermind-class">Nevermind</a>
    </div>
@endif



<!--ANIMATION-->
<script src='assets/js/jquery.min.js'></script>
<script  src="assets/js/index.js"></script>
<!--ANIMATION-->
@include('includes.login_page.footer')

</body>

</html>



