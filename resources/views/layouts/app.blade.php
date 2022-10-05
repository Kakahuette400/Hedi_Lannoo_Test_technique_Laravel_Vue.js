<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ __('Test Technique - Hédi Lannoo') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    <script
        src="https://code.jquery.com/jquery-3.6.1.slim.min.js"
        integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA="
        crossorigin="anonymous"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <script src='/js/main.js'></script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('https://giphy.com/gifs/theoffice-ljtfkyTD3PIUZaKWRi') }}">
                    {{ __('Test Technique - Hédi Lannoo') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">

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
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                    @auth
                                        <a class="dropdown-item" href="{{ route('user.profilePage') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('user.profilePage').submit();">
                                            {{ __('Your profile Page') }}
                                            <form id="user.profilePage" action="{{ route('user.profilePage') }}" method="GET" class="d-none">
                                                @csrf
                                            </form>
                                            @endauth
                                    @if (Auth::user()->roles == "ROLE_ADMIN")

                                        <a class="dropdown-item" href="{{ route('admin.dashboard') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('admin.dashboard').submit();">
                                            {{ __('Dashboard') }}
                                            <form id="admin.dashboard" action="{{ route('admin.dashboard') }}" method="GET" class="d-none">
                                                @csrf
                                            </form>

                                        <a class="dropdown-item" href="{{ route('admin.form-inscription') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('create-form').submit();">
                                            {{ __('create user') }}
                                        <form id="create-form" action="{{ route('admin.form-inscription') }}" method="GET" class="d-none">
                                            @csrf
                                        </form>
                                        </a>
                                    @endif
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
