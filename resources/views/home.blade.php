@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Inicio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="card-header">
        <h5 class="card-title">Se a logrado iniciar sesion con exito. (<b>{{auth()->user()->name}}</b>)</h5>
        </div>
        <br>
        <p class="card-text"> Bienvenido al sistema de inventario de la fundacion colombeia. </p>
    </div>
</div>

    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop