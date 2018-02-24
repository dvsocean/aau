<section id="banner">
    <div class="inner">
        <h2>American Airlines University</h2>
        <ul class="actions">
            <li>
                @if(Auth::check())
                    <a href="" class="button big special">Welcome {{ucfirst(Auth::user()->name)}}, proceed to AAU</a>
                @else
                    <a href="{{route('login')}}" class="button big special">Login</a>
                @endif
            </li>
        </ul>
    </div>
</section>