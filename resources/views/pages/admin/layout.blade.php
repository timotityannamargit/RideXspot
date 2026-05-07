<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideXspot ZRT.</title>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    @stack('pages')
</head>

<body>
    @if(!Route::is('admin.login') && !Route::is('admin.register')) 
        @include('pages.admin.partials.menu')
    @endif
    @yield('content')


</body>
@stack("aftercontent")
</html>