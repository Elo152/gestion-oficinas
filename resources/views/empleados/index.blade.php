@extends('layouts.app')

@section('title', 'Lista de empleados')

@section('content')

<div class="boton-container">
    <a href="{{ route('empleados.create', parameters: $oficina->id) }}" class="boton">Añadir empleado</a>
</div>

<div class="container-empleados">
    <h2 class="titulo">Empleados de {{ $oficina->nombre }}</h2>
    <div class="card-grid">
        @foreach($empleados as $empleado)
            <div class="card">
                <h3>
                    <a href="{{ route('empleados.edit', parameters: $empleado->id)}}">{{$empleado->nombre}}</a>
                </h3>
                <p>{{$empleado->dni}}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection