@extends('welcome')

@section('main_content')
    <div class="container">
         <div class="row mt-5">
              <div class="col contCol">
                       @foreach($movies as $movie)
                              <div class="movieCont">
                                  <div>
                                      <img src="/upload/pictures/{{$movie->picture}}" width="250px" height="290px">
                                  </div>
                                  <div class="movieContRow2">
                                        <h2>{{$movie->movie_name}}</h2>
                                        <h1>
                                            @foreach(\App\Models\Movie_genre::all() as $mg)
                                                @if($mg->movie_id==$movie->id)
                                                    {{\App\Models\Genre::find($mg->genre_id)->name}}
                                                    <br>
                                                @endif
                                            @endforeach
                                        </h1>
                                  </div>
                              </div>
                       @endforeach
              </div>
         </div>
    </div>
    <style>
        .contCol{
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        .movieCont{
            box-shadow: 0px 0px 6px #a9aab0;
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
            transition: 0.5s ease-out;
        }
        .movieCont:hover{
            box-shadow: 0px 0px 8px #5a5a5f;
        }
        .movieContRow2{
            padding: 10px 20px;
        }
        .movieCont h2{
            font-size: 20px;
        }
        .movieCont h1{
            font-size: 15px;
        }
    </style>
@endsection
