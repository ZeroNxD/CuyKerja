<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('Style.bootstrap')
</head>
<body>

    <div class="container-fluid">
        @include('Layout.menubar')
    </div>

    @yield('Content')

    <div class="container-fluid" style="padding: 3px">
        @include('Layout.Footer')
    </div>
    
</body>
</html>