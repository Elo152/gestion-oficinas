@extends('layouts.app')

@section('title', 'Formulario de edición de empleado')

@section('content')

<form action="{{ route('empleados.update', parameters: $empleado->id) }}" method="post" class="form-crear">
    @csrf
    @method('PUT')

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $empleado->nombre }}" required>
    <label for="apellido1">Primer apellido</label>
    <input type="text" name="apellido1" value="{{ $empleado->apellido1 }}" required>
    <label for="apellido2">Segundo apellido</label>
    <input type="text" name="apellido2" value="{{ $empleado->apellido2 }}" required>
    <label for="rol">Rol</label>
    <input type="text" name="rol" value="{{ $empleado->rol }}" required>
    <label for="fecha">Fecha nacimiento</label>
    <input type="date" name="fecha_nacimiento" value="{{ $empleado->date }}" required>
    <label for="dni">DNI</label>
    <input type="text" name="dni" value="{{ $empleado->dni }}" required>
    <label for="email">Email</label>
    <input type="email" name="email" value="{{ $empleado->email }}" required>
    <input type="submit" value="Editar empleado">
</form>

@endsection