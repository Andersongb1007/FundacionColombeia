
@extends('adminlte::page')

@section('title', 'Seguridad')

@section('content_header')
    <h1>Crear orden para retirar o reingresar bienes al almacen</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">Ordenes</h5>
        </div>
        <div class="card-body">

        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="nombre">Nombre del usuario</label>
                <input type="text" class="form-control" id="nombre" >
            </div>

            <div class="form-group col-md-12">
                <label for="descripcion">Descripcion o motivo</label>
                <textarea class="form-control" id="descripcion" rows="3"></textarea>
            </div>

            <div class="form-group col-md-12">
                <label for="cantidad">Cantidad de bienes </label>
                <input type="number" class="form-control" id="cantidad" >
            </div>
            
            <div class="form-group col-md-6 ">
                <label for="cantidad">Evidencia fotografica del estado del bien:</label>
                <input type="file" accept="image/*" class="form-control" id="seleccionArchivos">
                
            </div>

            <div class="form-group col-md-6">
                <img id="imagenPrevisualizacion" width="400px " height="400px">
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
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#descripcion' ) )
            .catch( error => {
                console.error( error );
            } );
    // Obtener referencia al input y a la imagen

        const $seleccionArchivos = document.querySelector("#seleccionArchivos"),
        $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

        // Escuchar cuando cambie
        $seleccionArchivos.addEventListener("change", () => {
        // Los archivos seleccionados, pueden ser muchos o uno
        const archivos = $seleccionArchivos.files;
        // Si no hay archivos salimos de la funci??n y quitamos la imagen
        if (!archivos || !archivos.length) {
            $imagenPrevisualizacion.src = "";
            return;
        }
        // Ahora tomamos el primer archivo, el cual vamos a previsualizar
        const primerArchivo = archivos[0];
        // Lo convertimos a un objeto de tipo objectURL
        const objectURL = URL.createObjectURL(primerArchivo);
        // Y a la fuente de la imagen le ponemos el objectURL
        $imagenPrevisualizacion.src = objectURL;
        });
</script>
@stop