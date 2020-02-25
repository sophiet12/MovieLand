
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container">
        <form method="post" action="{{url('/movie/edit/actor/'.$mov_id.'/'.$actor)}}">
            @csrf
            <div class="form-group">
                <h3>Edit Role</h3>
                <input type="role" name="role" class="form-control" id="role" value="{{$movie->pivot->role}}" >
            </div>
            <br>
            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
@endsection
