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
    <form action="{{route('oficinas.store')}}" method="post">
        @csrf
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" required>
        <label for="direccion">Direccion</label>
        <input type="text" name="direccion" required>
        <input type="submit" value="Añadir oficina">
    </form>
</body>
</html>
