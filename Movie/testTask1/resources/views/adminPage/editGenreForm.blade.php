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
                <form action="{{route('saveGenre')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Название жанра</label>
                        <input type="hidden" value="{{$genre->id}}" name="genre_id">
                        <input type="text" name="genre_name" required class="form-control mt-3" value="{{$genre->name}}">
                    </div>
                    <div class="form-group mt-3 d-flex justify-content-between">
                        <button class="btn btn-success" type="submit">Сохранить</button>
                        <a class="btn btn-danger" href="{{route('deleteGenre',$genre)}}">Удалить</a>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
