@extends('layouts.app')

@section('title', 'Añadir empleado')

@section('content')

<form action="{{ route('empleados.store') }}" method="post" class="form-crear">
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
    <input type="email" name="email" required>
    <input type="submit" value="Añadir empleado">
</form>

@endsection