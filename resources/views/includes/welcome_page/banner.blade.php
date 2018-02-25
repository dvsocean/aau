<section id="banner">
    <div class="inner">
        @include('includes.message_includes.messages')
        <br>
        <h2>American Airlines University</h2>
        <ul class="actions">
            <li>
                @if(Auth::check() and Auth::user()->administrator)
                    <b><h4>Welcome {{ucfirst(Auth::user()->name)}}</h4></b>
                    <a href="{{route('admin')}}" class="button big special">Administrator page</a>
                @elseif(Auth::check())
                    <b><h4>Welcome {{ucfirst(Auth::user()->name)}}</h4></b>
                @else
                    <a href="{{route('login')}}" class="button big special">Login</a>
                @endif
            </li>
        </ul>
    </div>
</section>