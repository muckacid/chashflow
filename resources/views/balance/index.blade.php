@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard Usuario</h1>
@stop

@section('content')

    <h1>lista de balance tipo exel</h1>

    @livewire('balance.balance-index')
    {{-- con modificacion o sin modificacion --}}

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script>
        console.log('Hi!');
    </script>
@stop
