
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container-fluid">
        <label style="font-family: Nunito, sans-serif; font-weight: bold; font-size:medium;" >Search result in movies</label>
        <div class="row">
            <section class="col">
                @include("layouts.movielist")
            </section>
        </div>

        <label style="font-family: Nunito, sans-serif; font-weight: bold; font-size:medium;">Search result in actors</label>
        <div class="row">
            <section class="col">
                @include("layouts.actorlist")
            </section>
        </div>
    </div>
@endsection
