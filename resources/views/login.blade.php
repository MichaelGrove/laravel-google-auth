<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>
    </head>
    <body>
      <h1>Sign in with Google</h1>
      <a href="{{ route('auth.redirect') }}">
        Sign in
      </a>
    </body>
</html>
