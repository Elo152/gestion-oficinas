<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('empleados.store') }}" method="post">
        @csrf
        <input type="hidden" name="oficina_id" value="{{ $oficina->id }}">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <label for="apellido1">Primer apellido</label>
        <input type="text" name="apellido1" required>
        <label for="apellido2">Segundo apellido</label>
        <input type="text" name="apellido2" required>
        <label for="rol">Rol</label>
        <input type="text" name="rol" required>
        <label for="fecha">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" required>
        <label for="dni">DNI</label>
        <input type="text" name="dni" required>
        <label for="email">Email</label>
        <input type="email" required>
        <input type="submit" value="Añadir empleado">
    </form>
</body>
</html>
