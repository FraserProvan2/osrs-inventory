<nav class="navbar navbar-dark navbar-expand-md bg-primary shadow-sm rounded py-3 mb-3">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            OSRS Inventories
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <a class="nav-link {{ (Request::path() == ('users/' . Auth::user()->url)) ? 'active' : '' }}" href="{{ url('users/' . Auth::user()->url) }}">{{ __('My Profile') }}</a>  
                @endauth
                <a class="nav-link {{ Route::currentRouteNamed('inventories') ? 'active' : '' }}" href="{{ route('inventories') }}">{{ __('Inventories') }}</a>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                @if (Route::has('login'))
                    <li class="nav-item">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                    </li>
                @endif
                @endguest
            </ul>
        </div>
    </div>
</nav>