<?php

namespace App\Http\Controllers\Api;

use App\Actor;
use App\Http\Resources\Actor as ActorResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get the actors
        $actors = Actor::paginate(5);

        // Return collection of actors as a resource
        return ActorResource::collection($actors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //  Allow for post update *or* create a new post
        $actor        = $request->isMethod('put') ? Actor::findOrFail($request->id) : new Actor;
//        $actor->id    = $request->input('id');
        $actor->act_fname = $request->input('act_fname');
        $actor->act_lname  = $request->input('act_lname');

        if ($actor->save()) {
            return new ActorResource($actor);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single actor
        $actor = Actor::findOrFail($id);
        // Return a single actor as a resource
        return new ActorResource($actor);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $actor = Actor::findOrFail($id);
        $actor->act_fname = $request->act_fname;
        $actor->act_lname = $request->act_lname;
        $actor->save();

        return new ActorResource($actor);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Get the actor
        $actor = Actor::findOrFail($id);

        //  Delete the actor, return as confirmation
        if ($actor->delete()) {
            return new ActorResource($actor);
        }
    }
}
