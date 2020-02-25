<table class="table">
    <thead>
        <tr>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Options</th>
        </tr>
    </thead>

    <tbody>
    @foreach($actors as $actor)
        <tr>
            <td>{{$actor->act_fname}}</td>
            <td>{{$actor->act_lname}}</td>
            <td>
                <a href="/actor/edit/{{$actor->id}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/actor/delete/{{$actor->id}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $actors->links() }}

