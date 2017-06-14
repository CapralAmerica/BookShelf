<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
    <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" type="image/png">
</head>
<body>
       <div class="wrapper">
          <div class="container-fluid">
               @include('parts.header')
               @yield('content')
          </div>
       </div>
   <script  type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
   <script type="text/javascript"  src="{{ URL::asset('js/jquery-3.2.1.min.js') }}"></script>
</body>
</html>