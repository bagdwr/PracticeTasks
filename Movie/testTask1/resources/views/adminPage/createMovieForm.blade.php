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
                <form action="{{route('createMovie')}}" method="post">
                    @csrf
                    <div class="form-group mt-3">
                        <label>Название фильма</label>
                        <input type="text" name="movie_name" required class="form-control mt-2">
                    </div>
                    <div class="form-group mt-3">
                        <label>Статус публикации</label>
                        <select name="movie_status"  class="form-control mt-2">
                            @foreach($statuses as $status)
                                <option value="{{$status->id}}">{{$status->status_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-success" type="submit">Создать</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
