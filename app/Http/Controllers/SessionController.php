<?php

namespace App\Http\Controllers;

use App\Session;
use App\Group;
use Illuminate\Http\Request;

class SessionController extends Controller
{

    public function getAll($id){
        $group = Group::find($id)->sessions;
        return response()->json($group, 200);
    }
    
    public function getOne($id, $session_id){
        $sessions = Group::find($id)->sessions()->find($session_id);
        return response()->json($sessions, 200);
    }
    
    public function create($id, Request $request){
        $group = Group::find($id);
        $session = $group->sessions()->create($request->all());
        
        return response()->json($session, 201);
    }
    
    public function update($id, $session_id,Request $request){
        $group = Group::findOrFail($id);
        $session = $group->sessions()->findOrFail($session_id)->update($request->all());

        return response()->json($session, 200);
    }

    public function delete($id, $session_id){
        $group = Group::findOrFail($id);
        $session = $group->sessions()->findOrFail($session_id)->delete();

        return response()->json($session, 200);
    }
    
}