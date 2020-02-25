
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container">
        <form method="post" action="{{url('/edit/'.$movie->id)}}">
            @csrf
            <div class="form-group">
                <label for="mov_title">Movie Title</label>
                <input name="mov_title" type="mov_title" class="form-control" id="title" value="{{$movie->movie_title}}" >
            </div>
            <div class="form-group">

                <label for="category">Category</label>
                <select class="form-control" id="category" name="category" >
                    @foreach($categories as $category)
                        @if($movie->category_id == $category->id)
                            <option  value="{{$category->id}}" selected>{{$category->name}}</option>
                        @else
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <section class="col">
                <label for="category">Movie Actors</label>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col"> Role</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($movie->actors as $actor)
                        <tr>
                            <td>{{$actor->act_fname}}</td>
                            <td>{{$actor->act_lname}}</td>
                            <td>{{$actor->pivot->role}}</td>
                            <td>
                                <a href="/movie/edit/actor/{{$movie->id}}/{{$actor->id}}" class="btn btn-sm btn-warning">Edit Role</a>
                                <a href="/movie_cast/delete/{{$movie->id}}/{{$actor->id}}/{{$actor->role}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
            <section class="col">
                <a href="/movie/NewActor/{{$movie->id}}" class="btn btn-primary" href="/">Add Actor for this movie</a>
                <input type="submit" class="btn btn-primary" value="update"></input>
            </section>


        </form>
    </div>
@endsection
