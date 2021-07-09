@extends('adminPage/admin')

@section('rightSide')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-12">
                <a class="btn btn-light createBtn" href="{{route('createGenreForm')}}">Создать</a>
                <table class="table">
                      <thead>
                           <tr>
                                <th>ID</th>
                                <th>Название жанра</th>
                                <th>Редактировать</th>
                           </tr>
                      </thead>
                      <tbody>
                           @foreach($genres as $g)
                               <tr>
                                   <td>{{$g->id}}</td>
                                   <td>{{$g->name}}</td>
                                   <td>
                                       <a href="{{route('editGenreForm',$g)}}" class="btn btn-info">Редактировать</a>
                                   </td>
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
