<div>
    <ul class="breadcrumbs">
        @guest
        <li><a href="{{ route('login') }}">{{ __('Login') }}</a> | @if (Route::has('register'))
            <a href="{{ route('register') }}">{{ __('Register') }}</a></li> @endif @else
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