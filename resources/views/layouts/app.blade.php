<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://use.fontawesome.com/165a97784e.js"></script>
    <script type="text/javascript" src="https://www.osrsbox.com/osrsbox-tooltips/osrsbox-tooltips.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.osrsbox.com/osrsbox-tooltips/osrsbox-tooltips.css">
</head>
<body>
    <div id="app">
        <main class="container py-4">
            @include('layouts.nav')
            @include('layouts.alert')
            @yield('content')
            @include('layouts.footer')

            <notifications group="all" position="top right" />
        </main>
    </div>
</body>
</html>
