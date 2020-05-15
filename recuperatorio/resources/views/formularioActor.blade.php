@extends('layouts.default')
@section('principal')
<div class="container rounded" style="background-color: #e3f2fd;">
        <form class="pb-2 mt-5" action="/agregarActor" method="post">
            {{csrf_field()}}
            <div  class="text-center">
                <label for="titulo">Agregar Nuevo Actor A Base De Datos</label>
            </div>
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" class="form-control" name="first_name" placeholder="Escriba aquí el nombre" value="{{old('first_name')}}">
            </div>
            <div class="form-group">
                <label for="last_name">Apellido</label>
                <input type="text" class="form-control" name="last_name" placeholder="Escriba aquí el apellido" value="{{old('last_name')}}">
            </div>
            <div class="form-group">
                <label for="rating">Rating del actor</label>
                <input type="number" class="form-control" name="rating" placeholder="Escriba aquí el rating" value="{{old('rating')}}">
            </div>
            <div class="form-group">
                <label for="favorite_movie_id">Película favorita del actor</label>
                <input type="number" class="form-control" name="favorite_movie_id" placeholder="Aquí el id de la pelicula favorita desde 1 a 21" value="{{old('favorite_movie_id')}}">
            </div>
            <ul class="errores text-danger">
              @foreach($errors->all() as $error)
              <li>
                {{$error}}
              </li>
              @endforeach
            </ul>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </form>
    </div>
@endsection