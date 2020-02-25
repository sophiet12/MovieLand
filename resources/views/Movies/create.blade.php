
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container-fluid">
        <form method="post" action="{{route('home')}}">
            @csrf
            <div class="form-group">
                <label for="mov_title">Movie Title</label>
                <input name="mov_title" type="mov_title" class="form-control" id="title" >
            </div>
            <div class="form-group">

                <label for="category">Category</label>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <input type="submit" class="btn btn-primary"></input>
        </form>
    </div>
@endsection
