<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Category;
use App\Movie;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\Actor as ActorResource;


class ActorController extends Controller
{

    public function index()
    {
        $actors = Actor::paginate(5);
        return view('Actors/show', ['actors'=> $actors] ); // dashboard
    }

    /*
    *Post form
    */
    public function addPost() {
        return view('Actors/add-actor');
    }



    public function delete($id)
    {
        Actor::find($id)->delete();
        return redirect('/actors');
    }

    public function edit($id)
    {
        $actor = Actor::find($id);
        return view('Actors/edit',['actor'=>$actor]);
    }

    public function update(Request $request ,$id)
    {
        Actor::find($id)->update(['act_fname' => $request->input('first_name'), 'act_lname' => $request->input('last_name')]);

//        DB::table('actors')->where('id', '=', $id)->update(['act_fname' => $request->input('first_name')]);
//        DB::table('actors')->where('id', '=', $id)->update(['act_lname' => $request->input('last_name')]);

        return redirect('/actors');
    }

    public function create()
    {
//        $actors = Actor::all();
        return view('Actors/create');
    }

    public function store(Request $request)
    {
        $existing = DB::select('select * from actors where act_fname = ? and act_lname = ?', [$request->get('first_name'),$request->get('last_name')]);
        if (!$existing) {
            $actor = new Actor();
            $actor->act_fname = $request->input('first_name');
            $actor->act_lname = $request->input('last_name');
            $actor->save();
        }

        return redirect('/actors');
    }

    public function add(Request $request, $mov_id){
        $id = $request->get('actorID');

        $movie = Movie::find($mov_id);

        $movie->actors()->attach($id);

        DB::table('actor_movie')
            ->where('movie_id', '=', $mov_id)
            ->where('actor_id', '=', $id)
            ->update(['role' => $request->get('role')]);
        return redirect('movie/ActorsList/'.$mov_id);
    }

}
