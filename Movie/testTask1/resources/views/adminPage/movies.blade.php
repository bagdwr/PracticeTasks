@extends('adminPage/admin')

@section('rightSide')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <a class="btn btn-light createBtn" href="{{route('createMovieForm')}}">Создать</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Название фильма</th>
                        <th>Жанры</th>
                        <th>Статус публикации</th>
                        <th>Редактировать</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($movies as $movie)
                            <tr>
                                <th>{{$movie->id}}</th>
                                <th>{{$movie->movie_name}}</th>
                                <th>
                                    @foreach(\App\Models\Movie_genre::all() as $mg)
                                        @if($mg->movie_id==$movie->id)
                                             {{\App\Models\Genre::find($mg->genre_id)->name}},
                                        @endif
                                    @endforeach
                                </th>
                                <th>{{\App\Models\Status::find($movie->status_id)->status_name}}</th>
                                <th>
                                    <a class="btn btn-info" href="{{route('showEditMovieForm',$movie)}}">Редактировать</a>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <style>
            .createBtn{
                float: right;
            }
        </style>
    </div>
@endsection
