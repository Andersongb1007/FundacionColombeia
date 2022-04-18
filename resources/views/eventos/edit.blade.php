
@extends('adminlte::page')

@section('title', 'Crear eventos')

@section('content_header')
    <h1>Crear eventos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">Editar evento</h5>
        </div>
        <div class="card-body">

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nombre">Nombre del evento</label>
                <input type="text" class="form-control" id="nombre" >
            </div>
            
            <div class="form-group col-md-12">
                <label for="materialrequerido">Material requerido para el evento</label>
                <textarea class="form-control" id="materialrequerido" rows="3"></textarea>
            </div>

            <div class="form-group col-md-12">
                <label for="personal">Personal requerido para el evento</label>
                <textarea class="form-control" id="personal" rows="3"></textarea>
            </div>
            
            <div class="form-group col-md-12">
                <label for="descripcion">Descripcion del evento</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
            </div>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#descripcion' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#personal' ) )
            .catch( error => {
                console.error( error );
            } );
            ClassicEditor
            .create( document.querySelector( '#materialrequerido' ) )
            .catch( error => {
                console.error( error );
            } );



</script>
@stop