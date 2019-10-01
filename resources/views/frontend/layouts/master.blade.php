<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/galaxy-style.css') }}">
</head>
<body>

@yield('content')

<script src="{{ asset('assets/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/popper.min.js') }}"></script>
<script src="{{ asset('assets/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/particles.js') }}"></script>
<script src="{{ asset('assets/custom.js') }}"></script>

@stack('scripts')

</body>
</html>
