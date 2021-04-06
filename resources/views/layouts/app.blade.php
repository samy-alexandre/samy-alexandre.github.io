<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Alexandre Samy">


    <!-- Bootstrap CSS -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
    <link href="{{ asset('css/project.css') }}" rel="stylesheet">

    <link href="{{ asset('css/canvas.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glide.core.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/glide.theme.min.css') }}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r121/three.min.js"></script>
    <script src="https://cdn.spline.design/lib/anime.min.js"></script>
    <script src=" {{ asset('js/spline.runtime.min.js') }}"></script>


    <!-- JavaScript -->

    <script src="https://cdn.jsdelivr.net/npm/@glidejs/glide"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <!-- GREENSOCK LIBRAIRIE -->
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" type="text/javascript"></script>


    <title>{{ $title ?? env('APP_NAME')}}</title>

</head>


<body>

<main>
    @yield('content')
</main>

</body>

</html>
