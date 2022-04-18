@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <a href="{{ route('users.create')}}" class="float-right btn btn-primary btn-sm">Crear nuevo usuario  <i class="fas fa-plus-circle"></i></a>
    
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    
    <div class="card">
        <div class="card-header">
            <h5>Usuario registrados en el sistema</h5>

        </div>
        <div class="card-body">
            <table class="table table-light table-bordered table-striped table-responsive-sm">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre y apellido</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td width="10px">
                                        <a href="{{ route('users.edit', $user) }}"  class="btn btn-success btn-sm  " type="button"><i class="far fa-edit"></i> Editar</a>
                                    </td>


                                    <td width="10px">
                                        <form action="{{ route('users.destroy', $user) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger btn-sm" type="submit"><i class="far fa-trash-alt"></i> Eliminar</button>
                                        </form>
                                    </td>

                            </tr>
                        @endforeach
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