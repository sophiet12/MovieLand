@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <section class="col">
                @include("layouts.actorlist")
            </section>
        </div>
        <section class="col">
            <a href="/actor/create" class="btn btn-primary">Add New Actor</a>
        </section>
    </div>
@endsection
