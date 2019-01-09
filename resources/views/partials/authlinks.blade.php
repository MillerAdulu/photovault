<div>
    <ul class="breadcrumbs">
        @guest
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a> | @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a></li> @endif @else

        <li>
            @if(App\Album::where([
                ['user_id', Auth::id()],
                ['paid', false],
            ])->first() == null)
            <form action="/album" method="POST">
                @csrf
                <input type="text" name="name" required>
                <button type="submit" class="btn site-btn">New Album</button>
            </form>
            @else
            Album: {{ App\Album::where([
                ['user_id', Auth::id()],
                ['paid', false],
            ])->first()->name }}
            @endif
        </li>

        <li><a href="/my/albums">Mine</a></li>

        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a></li>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @endguest
        </li>
    </ul>
    <!-- .breadcrumbs -->
</div>
<!-- .col -->