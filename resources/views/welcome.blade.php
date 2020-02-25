
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("layouts.movielist")
            </section>
        </div>
        <section class="col">
            <a href="/movie/create" class="btn btn-primary">Add New Movie</a>
        </section>
    </div>
@endsection
