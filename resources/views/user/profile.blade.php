@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Perfil Usuario</h1>
@stop

@section('content')

    <h1>Perfil de usuario</h1>
    <h2>nombre completo</h2>
    <h2>foto</h2>
    <h2>boton de editar</h2>
    <h2>boton para cambiar contraseña</h2>
    <h2>boton para eliminar la cuenta</h2>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
