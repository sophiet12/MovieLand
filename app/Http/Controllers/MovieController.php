<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Category;
use App\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;



class MovieController extends Controller
{
    public function index()
    {
        $actors = Actor::all();
        $movies = Movie::with('actors','category', 'category.movies')->paginate(5);
        return view('welcome', ['movies'=>$movies, 'actors'=>$actors]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('Movies/create', ['categories'=>$categories]);
    }

    public function store(Request $request)
    {
        //remplacer requete sql
        $existing = DB::select('select * from movies where movie_title = ? and category_id = ?', [$request->get('mov_title'),$request->get('category')]);

        if (!$existing) {
            $movie = new Movie();
            $movie->movie_title = $request->get('mov_title');
            $movie->category_id = $request->get('category');
            $movie->save();
        }
        return redirect('/');
    }

    public function show($mov_id)
    {
        $movie = Movie::with('category', 'actors')->findOrFail($mov_id);
        return view('Movies/show',['movie'=>$movie]);
//        return MovieResource::collection([$movie, $actors]);
    }


    public function edit($mov_id)
    {
        $categories = Category::all();
        $movie = Movie::with('category', 'actors')->findOrFail($mov_id);

        return view('Movies/edit',['movie'=>$movie, 'categories'=>$categories]);
    }

    public function delete($id)
    {
        Movie::find($id)->delete();
        return redirect('/');
    }

    public function editActorList($mov_id, $act_id)
    {

        $movie = Movie::find($mov_id)->actor($act_id);
        $actor = Actor::with('movies')->find($act_id);

        return view('edit_role',[ 'mov_id'=>$mov_id ,'movie'=>$movie, 'actor'=>$act_id]);
    }

    public function updateActorList(Request $request ,$mov_id, $act_id)
    {

        DB::table('actor_movie')
            ->where('movie_id', '=', $mov_id)
            ->where('actor_id', '=', $act_id)
            ->update(['role' => $request->input('role')]);
        return redirect('/movie/ActorsList/'.$mov_id);
    }

    public function createNewActor($id)
    {
        $actors = Actor::all();
        $movie = Movie::find($id);
        return view('Movies/addActor', ['actors'=>$actors, 'mov_id'=>$movie->id]);
    }


    public function AddNewActor(Request $request, $id)
    {
        dd($id);
        $actor = Actor::find($request->input('act_id'));
//        dd($actor);
        $movie = Movie::find($id);

        $movie->actors()->attach($actor->id);
//        $movie->actor($actor->id)->role = $request->input('role');
        DB::table('actor_movie')
            ->where('movie_id', '=', $id)
            ->where('actor_id', '=', $actor->id)
            ->update(['role' => $request->input('role')]);
//        $movie->save();
        return redirect('/movie/ActorsList/'.$id);
    }

    public function deleteRole( $mov ,$id)
    {
        DB::table('actor_movie')->where('id', '=', $id)->delete();
        return redirect('/movie/ActorsList/'.$mov);
    }

    public function update(Request $request ,$id)
    {
        DB::table('movies')->where('id', '=', $id)->update(['movie_title' => $request->input('mov_title')]);
        DB::table('movies')->where('id', '=', $id)->update(['category_id' => $request->input('category')]);

        return redirect('/');
    }

    public function search(Request $request){
//        dd($request);
        $search = $request->get('query');
        $movies = Movie::where('movie_title', 'like', '%'.$search.'%')->paginate(5);
        $actors = Actor::where('act_fname', 'like', '%'.$search.'%')
                              ->orWhere('act_lname', 'like', '%'.$search.'%')->paginate(5);

        return view('search_result', ['movies'=>$movies, 'actors'=>$actors]);
    }

    public function index1()
    {
        return view('Movies/addActor');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function autocomplete(Request $request)
    {
        $search = $request->term;
//          $search = $request->get('term');

        $actors = Actor::where('act_fname', 'LIKE', '%'.$search.'%')->
        orWhere('act_lname', 'LIKE', '%'.$search.'%')->limit(5)->get();
        foreach ($actors as $actor)
        {
            $results[] = ['id' => $actor->id, 'value' => $actor->act_fname.' '.$actor->act_lname ];
        }
        return response()->json($results);

    }



}
