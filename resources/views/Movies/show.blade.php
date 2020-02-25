@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
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
                                <a href="/movie_cast/delete/{{$movie->id}}/{{$actor->pivot->id}}" class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </section>
        </div>
        <section class="col">
            <a href="{{route('updatelistactors', $movie->id)}}" class="btn btn-primary" href="/">Update actor's list for this movie</a>
        </section>
    </div>
@endsection
