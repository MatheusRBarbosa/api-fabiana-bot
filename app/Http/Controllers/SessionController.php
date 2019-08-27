<?php

namespace App\Http\Controllers;

use App\Session;
use App\Group;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function getOne($id){
        $session = Group::find($id)->sessions();
        return response()->json($session, 200);
    }
    /*
    public function getAll(){
        return response()->json(Session::all(), 200);
    }
    */

    public function create($id, Request $request){
        $group = Group::find($id);
        $session = $group->sessions()->save($request->all());

        return response()->json($session, 201);
    }
    /*
    public function update($id, Request $request){
        $session = Session::findOrFail($id);
        $session->update($request->all());

        return response()->json($session, 200);
    }

    public function delete($id){
        $session = Session::findOrFail($id);
        $session->delete();

        return response()->json($session, 200);
    }
    */
}