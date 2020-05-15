@extends('layouts.default')
@section('principal')
<div class="container rounded" style="background-color: #e3f2fd;">
        <form class="pb-2 mt-5" action="/editarPelicula/{id}" method="put">
            {{csrf_field()}}
            <div  class="text-center">
                <label for="titulo">Formulario Para Actualizar Datos De Pelicula</label>
            </div>
            <div class="form-group">
                <label for="title">Título</label>
                <input type="text" class="form-control" name="title" placeholder="Aquí complete con el título" value="{{$movie->title}}">
            </div>
            <div class="form-group">
                <label for="rating">Rating</label>
                <input type="number" class="form-control" name="rating" placeholder="Aquí complete con el rating" value="{{$movie->rating}}">
            </div>
            <div class="form-group">
                <label for="awards">Premios Ganados</label>
                <input type="number" class="form-control" name="awards" placeholder="Aquí la cantidad de premios recibidos" value="{{$movie->awards}}">
            </div>
            <div class="form-group">
                <label for="release_date">Fecha de Estreno</label>
                <input type="datetime" class="form-control" name="release_date" placeholder="Aquí la fecha de estreno" value="{{$movie->release_date}}">
            </div>
            <div class="form-group">
                <label for="length">Duración</label>
                <input type="number" class="form-control" name="length" placeholder="Aquí la duración de la película" value="{{$movie->length}}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection