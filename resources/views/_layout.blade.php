<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    @vite('resources/sass/app.sass')
</head>

<body>
    @yield('content')

    @vite('resources/js/app.js')
</body>
</html>
