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
                  <form action="{{route('createGenre')}}" method="post">
                      @csrf
                       <div class="form-group">
                            <label>Название жанра</label>
                            <input type="text" name="genre_name" required class="form-control mt-3">
                       </div>
                      <div class="form-group mt-3">
                            <button class="btn btn-success" type="submit">Создать</button>
                      </div>
                  </form>
            </div>
        </div>
    </div>
@endsection
