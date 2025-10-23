<!-- resources/views/eventos/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>{{ $evento->nombre }}</h1>
    <p>{{ $evento->descripcion }}</p>
    <p><strong>Inicio:</strong> {{ $evento->horaFecha_inicio }}</p>
    <p><strong>Fin:</strong> {{ $evento->horaFecha_fin }}</p>
@endsection
