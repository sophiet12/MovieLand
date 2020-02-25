<table class="table">
    <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Category</th>
            <th scope="col">Options</th>
        </tr>
    </thead>

    <tbody>
    @foreach($movies as $movie)
        <tr>
            <td>{{$movie->movie_title}}</td>
            <td>{{$movie->category->name}} </td>
            <td>
                <a href="/movie/ActorsList/{{$movie->id}}" class="btn btn-sm btn-info">Show Actors</a>
                <a href="/edit/{{$movie->id}}" class="btn btn-sm btn-warning">Edit</a>
                <a href="/movie/delete/{{$movie->id}}" class="btn btn-sm btn-danger">Delete</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{ $movies->links() }}

