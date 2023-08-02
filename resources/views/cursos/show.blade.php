@extends('layouts.plantilla')
@section('title', 'Curso ' . $curso)
@section('content')
    <h1>Bienvenido al curso {{$curso}} </h1> {{-- Para evitar código php, se colocan llaves. --}}
@endsection