@extends('adminlte::page')

@section('title', 'Lista de ordenes de seguridad')

@section('content_header')
    <a href="{{ route('seguridad.create')}}" class="float-right btn btn-primary btn-sm">Crear orden  <i class="fas fa-plus-circle"></i></a>
    
    <h1>Lista de ordenes de seguridad</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h5>Lista de ordenes de seguridad</h5>

        </div>
        <div class="card-body">
            <table class="table table-light table-bordered table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre del la orden</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <tr>
                            <td>1</td>
                            <td>Ejemplo de orden de retiro de materiales al almacen</td>
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
                            <td>Ejemplo de orden de reingreso de materiales al almacen</td>
                            <td width="15px">
                                    <a href=""  class="btn btn-success btn-sm  " type="button"><i class="far fa-edit"></i> Editar</a>
                                </td>
                                <td width="10px">
                                    <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i> Eliminar</button>
                                </td>
                            </tr>
                    </tr>
                    <tr>
                        <tr>
                            <td>3</td>
                            <td>Ejemplo  3</td>
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