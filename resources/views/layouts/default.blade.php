<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Sample') - laravel 入門教程</title>
    <link rel="stylesheet" href="css/app.css">
    {{--    <link href="{{ mix('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
@include('layouts._header')

<div class="container" style="margin-top : 80px; margin-bottom: 30px;">
    @yield('content')
</div>
@include('layouts._footer')
</body>
</html>
