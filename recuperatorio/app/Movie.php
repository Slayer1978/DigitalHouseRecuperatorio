<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Genre;
use App\Actor;

class Movie extends Model
{
    public $guarded=[];

    public function genres(){
        return $this->belongsTo('Genre', 'genre_id' );
    }

    public function actors(){
        return $this->belongsToMany('Actor', 'actor_movie', 'movie_id', 'actor_id');
    }
}
