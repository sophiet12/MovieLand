
@extends('layouts.header')

@section('title', 'Page Title')

@show('navbar')

@section('content')
    <br>
    <div class="container">
            <h2>Add Actor</h2><br>
            <form method="post" action="{{url('/updatedList/'.$mov_id)}}">
                @csrf
                <div class="form-group">
                    <h3>Add Actor</h3>
                    <input id="search" name="search" type="text" class="form-control" placeholder="Search" />
                    <input type="hidden" id="actorID" class="actorID" name="actorID">                </div>
                <div class="form-group">
                    <h3>Add Role</h3>
                    <input type="role" name="role" class="form-control" id="role" placeholder="Actor's Role" >
                </div>
                <br>
                <input type="submit" class="btn btn-primary" value="Submit"></input>
            </form>
    </div>
    <script>

        $('#search').autocomplete({
            source:'{!! route('autocomplete')!!}',
            dataType : 'json',
            minlength:1,
            autoFocus:true,
            select:function(e,ui)
            {
                var actorID = ui.item.id;

                $('#search').val(ui.item.value);
                $('.actorID').val(actorID);
                $('#actorID').val(actorID);
            },
            open: function (event,ui) {
                $('.ui-autocomplete').off('menufocus hover mouseover mouseenter');
            }
        });
    </script>
@endsection
