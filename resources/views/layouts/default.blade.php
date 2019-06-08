<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title', 'Noms | Recipe & Grocery List')</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,400,700" rel="stylesheet">
  <link rel="stylesheet" href="/css/app.css">
</head>

<body class="@yield('body-class')">
  <div id="app">
    @yield('content')
  </div>
</body>
  <script src="/js/app.js"></script>
</html>