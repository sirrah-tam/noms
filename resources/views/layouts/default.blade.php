<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Noms | Recipe & Grocery List')</title>

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">


  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/145f6331f8.js"></script>  
</head>

<body class="@yield('body-class')">
  <div id="app">
    @include('partials.layout.header')

    @yield('content')

    @include('partials.layout.footer')
  </div>
</body>
  <script src="/js/app.js"></script>
</html>