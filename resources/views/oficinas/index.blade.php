@extends('layouts.app')

@section('title', 'Lista de oficinas')

@section('content')

<div class="boton-container">
    <a href="{{ route('oficinas.create') }}" class="boton">Añadir oficina</a>
</div>

<div class="container-oficinas">
    <h2 class="titulo">Lista de oficinas</h2>
    <div class="card-grid">
        @foreach($oficinas as $oficina)
            <div class="card">
                <h3>
                    <a href="{{ route('empleados', $oficina->id) }}">{{ $oficina->nombre }}</a>
                </h3>
                <p>📍{{ $oficina->direccion }}</p>
            </div>
        @endforeach
    </div>
</div>

@endsection
