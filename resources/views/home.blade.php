{{-- Las siguientes línes son directivas de Blade, por ello los archivos que quieran heredar la estructura
    de plantilla.blade.php deben tener la extensión blade.php

    1.- Extiende de la carpeta views -> layouts -> plantilla.blade.php
    2.- La sección @yield('title') tendrá el nombre Home
    3.- La sección @yield('content') que es el body, tendrá solo un h1
    --}}
@extends('layouts.plantilla')
@section('title', 'Home')
@section('content')
    <h1>Bienvenido a la página principal</h1>
@endsection