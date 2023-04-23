<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    @yield('content')
</div>
</body>
</html>
