<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MoviesController extends Controller
{
    public function peliculas(){

    }

    public function formularioPelicula($id){
        $movie=Movie::find($id);
        $movie=compact('movie');
        return view('formularioPelicula', $movie );
    }

    public function editarPelicula(Request $request, $id){
        $movie=Movie::find($id);
        $movie->title=$request['title'];
        $movie->rating=$request['rating'];
        $movie->awards=$request['awards'];
        $movie->release_date=$request['release_date'];
        $movie->length=$request['length'];
    
        $movie->save();

        return redirect('peliculas');
    }
}
