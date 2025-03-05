<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gestión de Oficinas')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
    <a href="{{ route('oficinas') }}"><h1>Gestión de Oficinas y Empleados</h1></a>
    </header>

    <main>
        @yield('content')
    </main>

</body>
</html>
