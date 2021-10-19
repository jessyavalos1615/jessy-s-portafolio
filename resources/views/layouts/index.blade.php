<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}

    {{-- Local --}}
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    {{-- CSS End --}}

    {{-- JS --}}

    {{-- Local --}}
    <script src="{{ asset('/js/pts.min.js') }}"></script>

    {{-- JS End --}}

    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

    <title> Landing - @yield('title') </title>

</head>

<body>

    @include('partials.landing-header')

    @yield('body')

    <script src="{{ asset('/js/canvas.js') }}"></script>

</body>

</html>
