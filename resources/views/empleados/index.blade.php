<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="boton-crear">
        <a href="{{ route('empleados.create', parameters:$oficina->id) }}" class="boton">Añadir empleado</a>
    </div>
    <div class="">
        <h2>Empleados de la oficina {{ $oficina->nombre }}</h2>
        <div class="">
                @foreach($empleados as $empleado)
                    <div class="">
                        <p>
                            <a href="{{ route('empleados.edit', parameters: $empleado->id)}}">{{$empleado->nombre}}</a>
                        </p>
                        <p>{{$empleado->dni}}</p>
                    </div>
                @endforeach
        </div>
    </div>
</body>
</html>
