<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Task App</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Styles -->
    @yield('custom-styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">

    <link rel="icon" type="image/favicon" href="{{ asset('images/favicon.ico') }}" />

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark shadow-sm" style="background-color: #2b4e72;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"><strong>Task App</strong></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto"></ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest

                            <div class="navbar-item">
                                <div class="buttons">
                                    <a class="button has-shadow is-success" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </div>
                            </div>

                            @if (Route::has('register'))
                                        <div class="buttons">
                                            <a class="button has-shadow is-warning" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </div>
                            @endif

                        @else
                            <a class="navbar-item bg-transparent text-white" href="/home">My Dashboard</a>
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a class="button has-shadow is-warning" href="/profile">My account</a>
                                    <a class="button has-shadow is-danger" href="{{ route('logout') }}"onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>

@yield('footer')
</html>
