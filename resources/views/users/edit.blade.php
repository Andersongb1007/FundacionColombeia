@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"> Editar usuario</h5>
        </div>
        <div class="card-body">

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nombre">Nombre y apellido</label>
                <input type="text" value="{{auth()->user()->name}}" class="form-control" id="nombre" >
            </div>
            <div class="form-group col-md-12">
                <label for="correo">Correo electronico</label>
                <input type="email" value="{{auth()->user()->email}}" class="form-control" id="correo">
            </div>
            <div class="form-group col-md-12">
                <label for="contraseña">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña">
            </div>
            <div class="form-group col-md-12">
                <label for="re_contraseña">Repetir Contraseña:</label>
                <input type="password" class="form-control" id="re_contraseña">
            </div>
            <div class="form-group col-md-12">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad">
            </div>
            <div class="form-group col-md-12">
                <label for="AreadeTrabajo">Area de trabajo</label>
                <input type="text"  class="form-control"  id="AreadeTrabajo">
            </div>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop