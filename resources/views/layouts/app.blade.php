<html>
    <head>
        <title>{{$page->title || 'home'}}</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
        <script type='text/javascript' src='{{ asset('js/app.js') }}'></script>
    </head>
    <body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
    </body>
</html>
