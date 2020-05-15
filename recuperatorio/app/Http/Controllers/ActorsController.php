<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActorsController extends Controller
{
    public function actores(){
        return view('actores');
    }

    public function formularioActor(){
        return view('formularioActor');
    }

    public function agregarActor(){
        return view('actorAgregado');
    }
}
