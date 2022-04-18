@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Crear usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center"> Crear nuevo usuario</h5>
        </div>
        <div class="card-body">

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre">Nombre y apellido</label>
                <input type="text" class="form-control" id="nombre" >
            </div>
            <div class="form-group col-md-6">
                <label for="correo">Correo electronico</label>
                <input type="email" class="form-control" id="correo">
            </div>
            <div class="form-group col-md-6">
                <label for="contraseña">Contraseña:</label>
                <input type="password" class="form-control" id="contraseña">
            </div>
            <div class="form-group col-md-6">
                <label for="re_contraseña">Repetir Contraseña:</label>
                <input type="password" class="form-control" id="re_contraseña">
            </div>
            <div class="form-group col-md-6">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad">
            </div>
            <div class="form-group col-md-12">
                <label for="AreadeTrabajo">Area de trabajo</label>
                <input type="text"  class="form-control"  id="AreadeTrabajo">
            </div>
            
             <div class="form-group col-md-6 align-self-auto mx-auto">
                <button class="btn btn-primary " type="button">Crear</button>
                <button class="btn btn-danger" type="reset">Reiniciar formulario</button>
                <a href="{{route('seguridad.index')}}" class="btn btn-secondary">Volver a lista de ordenes</a>
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