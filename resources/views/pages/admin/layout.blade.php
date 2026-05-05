<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RideXspot ZRT.</title>    
    <script src="script.js"></script>
    @stack('pages')
</head>

<body>
    @if(!Route::is('admin.login'))
        @include('pages.admin.partials.menu')
    @endif
    @yield('content')


</body>
@stack("aftercontent")
</html>