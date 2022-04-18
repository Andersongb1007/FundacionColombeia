@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('eventos.create')}}" class="float-right btn btn-primary btn-sm">Crear nuevo eventos  <i class="fas fa-plus-circle"></i></a>
    
    <h1>Lista de eventos</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h5>Eventos del sistema</h5>

        </div>
        <div class="card-body">
            <table class="table table-light table-bordered table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre del evento</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <tr>
                            <td>1</td>
                            <td>Ejemplo de titulo de evento 1</td>
                            <td width="10px">
                                    <a href=""  class="btn btn-success btn-sm  " type="button"><i class="far fa-edit"></i> Editar</a>
                                </td>
                                <td width="10px">
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i> Eliminar</button>
                                </td>
                            </tr>
                    </tr>
                    <tr>
                        <tr>
                            <td>2</td>
                            <td>Ejemplo de titulo de evento 2</td>
                            <td width="15px">
                                    <a href=""  class="btn btn-success btn-sm  " type="button"><i class="far fa-edit"></i> Editar</a>
                                </td>
                                <td width="10px">
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i> Eliminar</button>
                                </td>
                            </tr>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop