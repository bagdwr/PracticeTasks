<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Status;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function movieUser(){
        $movies=Movie::all()->where('status_id',1);
        return view('movieUser',compact('movies'));
    }
}
