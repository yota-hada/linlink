@include('layouts.header')
@include('layouts.footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name = "csrf-token" content = "{{ @csrf_token }}">
    <link rel="icon" href="{{ asset('/img/logo.png') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('/css/vendor/materialize.min.css') }}" type="text/css" rel="stylesheet"/>
    <!-- <link href="/css/vendor/materialize.min.css" type="text/css" rel="stylesheet"/> -->
    <link href="{{ asset('/css/base.css') }}" type="text/css" rel="stylesheet"/>
    @yield('pageCss')
    <title>linlink</title>
</head>
<body>
    @yield('header')
    @yield('content')


    <script type="text/javascript" src="{{ asset('/js/vendor/jquery3.3.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/materialize.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/vendor/moveTo.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/common.js') }}"></script>
    @yield('footer')
</body>
</html>