<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>
    <script src="{{asset('js/v.js')}}"></script>
    <script>
      var vConsole = new VConsole();
    </script>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>
  @include('layouts.navbar')
  @yield('content')
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/axios.js')}}"></script>
  <script src="{{asset('js/script.js')}}"></script>
  @yield("scripts")
</body>
</html>