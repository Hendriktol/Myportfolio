<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Hendrik Tol</title>
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <meta charset="UTF-8" />
        <meta name="description" content="Graphic designer for Team Liquid." />
		<meta name="keywords" content="TEAMLIQUID, TLWIN, tl, teamliquid, liquid, graphic design, design, graphics, livestream, gaming" />
        <link rel="stylesheet" href="{{ asset('css/app.css') }}"/>
        <meta name="theme-color" content="#163552" />
    </head>
    <body>
        @include('layouts.navbar')
        @yield('content')
        @include('layouts.footer')
        <script type='text/javascript' src='{{ asset('js/app.js') }}'></script>
    </body>
</html>
