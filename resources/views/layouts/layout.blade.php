<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pizza</title>
        {{-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet"> --}}
        <link href="{{ asset('frontend/css/main.css') }}" rel="stylesheet"  type="text/css">

        {{-- @vite(['resources/sass/main.scss']); --}}

    </head>
    <body>

      @yield('content')

      <footer>
        <p>Copyright 2020 Pizza House</p>
      </footer>
    </body>
</html>
