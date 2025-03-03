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
@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

    <form action="{{ route('empleados.update', parameters: $empleado->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{ $empleado->nombre }}" required>
        <label for="apellido1">Primer apellido</label>
        <input type="text" name="apellido1" value="{{ $empleado->apellido1 }}"required>
        <label for="apellido2">Segundo apellido</label>
        <input type="text" name="apellido2" value="{{ $empleado->apellido2 }}" required>
        <label for="rol">Rol</label>
        <input type="text" name="rol" value="{{ $empleado->rol }}" required>
        <label for="fecha">Fecha nacimiento</label>
        <input type="date" name="fecha_nacimiento" value="{{ $empleado->date }}"  required>
        <label for="dni">DNI</label>
        <input type="text" name="dni" value="{{ $empleado->dni }}"  required>
        <label for="email">Email</label>
        <input type="email" name="email" value="{{ $empleado->email }}"  required>
        <input type="submit" value="Editar empleado">
    </form>
</body>
</html>
