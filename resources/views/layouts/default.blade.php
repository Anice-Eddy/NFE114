<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titre')</title>
    <link rel="stylesheet" href="/css/default.css">
</head>
<body>
    @include('layouts.header')
    @yield('contenu')
    @include('layouts.footer')
</body>
</html>