<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
     protected $fillable=[
         'id',
         'movie_name',
         'picture',
         'status_id'
     ];

     public function genres(){
         return $this->belongsToMany('App\Genre','movie_genre','movie_id','genre_id');
     }
}
