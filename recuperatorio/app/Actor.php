<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Movie;

class Actor extends Model
{
    public $guarded=[];

    public function movies(){
        return $this->belongsToMany('Movie', 'actor_movie', 'actor_id', 'movie_id');
    }
}
