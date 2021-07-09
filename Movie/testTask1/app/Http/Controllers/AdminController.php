<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Status;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function showGenresList(){
        $genres=Genre::all();
        return view('adminPage/genres',compact('genres'));
    }
    function showCreateGenre(){
        return view('adminPage/createGenreForm');
    }

    function createGenre(Request $request){
        Genre::create([
            'name'=>$request->input('genre_name')
        ]);

        return redirect()->route('createGenreForm')->with('success','Жанр был создар');
    }
    function showEditGenreForm(Genre $genre){
        if ($genre!=null){
            return view('adminPage/editGenreForm',compact('genre'));
        }
            return redirect()->route('genresList');

    }
    function saveGenre(Request $request){
        $genre=Genre::find($request->genre_id);
        if ($genre!=null){
            $genre->name=$request->genre_name;
            $genre->save();
            return redirect()->route('editGenreForm',$genre)->with('success','Жанр сохранен');
        }
        return redirect()->route('editGenreForm',$genre)->with('error','Something went wrong');
    }
    function deleteGenre(Genre $genre){
        $genre->delete();
        return redirect()->route('genresList');
    }
    function showMovies(){
        $movies=Movie::all();
        return view('adminPage/movies',compact('movies'));
    }
    function showCreateMovieForm(){
        $statuses=Status::all();
        return view('adminPage/createMovieForm',compact('statuses'));
    }
    function createMovie(Request $request){
        $status=Status::find($request->movie_status);
        $statuses=Status::all();
        if ($status!=null){
           Movie::create([
               'movie_name'=>$request->movie_name,
               'status_id'=>$status->id
           ]);
            return redirect()->route('createMovieForm')->with('success','Фильм был создан');
        }
        return redirect()->route('createMovieForm')->with('error','Something went wrong');
    }
    function editMovieForm(Movie $movie){
        if ($movie!=null){
            $statuses=Status::all();
            return view('adminPage/editMovieForm',compact(['movie','statuses']));
        }
        return redirect()->route('movies');
    }
    function deleteMovie(Movie $movie){
        $movie->delete();
        return redirect()->route('movies');
    }
    function editMovie(Request $request){
        $movie=Movie::find($request->movie_id);
        if ($movie!=null){
            $movie->movie_name=$request->movie_name;
            $movie->status_id=$request->movie_status;
            $movie->save();
            return redirect()->route('showEditMovieForm',$movie)->with('success','Фильм бы сохранен');
        }
        return redirect()->route('showEditMovieForm',$movie)->with('error','Something went wrong');
    }
}
