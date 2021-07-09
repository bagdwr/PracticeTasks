<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table="genre";
    protected $fillable=[
        'id',
        'name'
    ];

    public function movies(){
        return $this->belongsToMany('App\Movie','movie_genre','genre_key','movie_key');
    }
}
