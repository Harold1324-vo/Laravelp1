{{-- Todo esta estructura se repetirá en todas las páginas --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- @yield('') ayuda a dar un nombre identificativo, cambiará dependiendo la página --}}
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
</body>
</html>