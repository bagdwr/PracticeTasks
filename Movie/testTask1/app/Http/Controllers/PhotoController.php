<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
     function editMovieImage(Request $request){
         $movie=Movie::find($request->movie_id);
         if ($movie!=null){
//             $request->validate([
//                 'image'=>'required|mimes:jpg,png,jpeg|max:10000'
//             ]);
                 $picture=$request->file('movie_picture');
                 $filename=time().'-'.$picture->getClientOriginalName();
                 $picture->move(public_path('/upload/pictures'),$filename);
                 $movie->picture=$filename;
                 $movie->save();
                 return redirect()->route('showEditMovieForm',$movie)->with('success','Изображение был сохранен');
         }
         return redirect()->route('showEditMovieForm',$movie)->with('error','Something went wrong');
     }
}
