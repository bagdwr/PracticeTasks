@extends('adminPage/admin')

@section('rightSide')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 offset-3">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{session('success')}}
                    </div>
                @endif
                @if(session('error'))
                    <div class="alert alert-danger">
                        {{session('error')}}
                    </div>
                @endif

                      <img src="/upload/pictures/{{$movie->picture}}" width="300px" height="300px">
                      <form action="{{route('editMovieImage')}}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group mt-3">
                              <input type="hidden" value="{{$movie->id}}" name="movie_id">
                              <label>Image</label>
                              <input type="file" name="movie_picture" required>
                          </div>
                          <div class="form-group mt-3  d-flex justify-content-between">
                              <button class="btn btn-success" type="submit">Сохранить</button>
{{--                              <a class="btn btn-danger" href="{{route('deleteMovie',$movie)}}">Удалить</a>--}}
                          </div>
                      </form>
                <form action="{{route('editMovie')}}" method="post" class="mt-5">
                    @csrf
                    <div class="form-group mt-3">
                        <input type="hidden" value="{{$movie->id}}" name="movie_id">
                        <label>Название фильма</label>
                        <input type="text" name="movie_name" required class="form-control mt-2" value="{{$movie->movie_name}}">
                    </div>
                    <div class="form-group mt-3">
                        <label>Статус публикации</label>
                        <select name="movie_status"  class="form-control mt-2">
                            @foreach($statuses as $status)
                                <option value="{{$status->id}}"
                                  @if($movie->status_id===$status->id)
                                      selected
                                  @endif
                                >{{$status->status_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3  d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Сохранить</button>
                        <a class="btn btn-danger" href="{{route('deleteMovie',$movie)}}">Удалить</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
