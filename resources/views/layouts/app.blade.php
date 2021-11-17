<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!----CEO---->
    <meta name="author" content="Estudiantes de la Universidad Luterana Salvadoreña">
    <meta name="description"
        content="Technology Box es una tienda en linea que ofrece productos de tecnología, como teclados, memorias, router, entre muchos dispositivos más y el metodo de pago es super seguro porque aceptamos PayPal.">
    <meta property="og:title" content="Technology Box">

    <link rel="shortcut icon" href="{{ asset('images/icon/logo.png') }}" type="image/x-icon">

    <meta property="og:image" content="{{ asset('images/seo/products.png') }}">
    <meta property="og:description"
        content="Technology Box es una tienda en linea que ofrece productos de tecnología, como teclados, memorias, router, entre muchos dispositivos más y el metodo de pago es super seguro porque aceptamos PayPal.">
    <meta property="og:title" content="MyTienda-Tech">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Scripts -->
    <script type="text/javascript"></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/evento.js') }}" defer></script>




    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--ICONS FONTAWESOME--->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!---SWEET ALERT JS--->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!---ALERTIFY CSS and JS---->
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
    <!-- JavaScript -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</head>

<body>
    <div id="app">
        @include('partials.navbar')
        <main>
            @include('partials.messages')
            @yield('content')
        </main>
        @include('partials.footer')
    </div>
</body>

</html>
