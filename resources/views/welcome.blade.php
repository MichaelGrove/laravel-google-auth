<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Hello, {{ Auth::user()->name }}</h1>
        <a href="{{ route('auth.logout') }}">Logout</a>
    </body>
</html>
