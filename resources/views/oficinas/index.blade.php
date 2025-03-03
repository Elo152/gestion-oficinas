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
        <a href="{{route('oficinas.create')}}" class="boton">Añadir oficina</a>
    </div>
    <div class="">
        <h2>Lista de oficinas</h2>
        <div class="">
                @foreach($oficinas as $oficina)
                    <div class="">
                        <h3>
                            <a href="{{route('empleados', parameters: $oficina->id)}}">{{$oficina->nombre}}</a>
                        </h3>
                        <p>{{$oficina->direccion}}</p>
                    </div>
                @endforeach
        </div>
    </div>
</body>
</html>
