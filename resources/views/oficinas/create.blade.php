@extends('layouts.app')

@section('title', 'Añadir oficina')

@section('content')

<form action="{{route('oficinas.store')}}" method="post" class="form-crear">
    @csrf
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" required>
    <label for="direccion">Direccion</label>
    <input type="text" name="direccion" required>
    <input type="submit" value="Añadir oficina">
</form>

@endsection