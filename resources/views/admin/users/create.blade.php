@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administrador</h1>
@stop

@section('content')

    <h1>crear Usuario</h1>
    {{-- pasar el usuario o el id del usuario por parametro a travez del controlador --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop