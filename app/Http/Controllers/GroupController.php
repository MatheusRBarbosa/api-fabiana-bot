<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function getAll(){
        return response()->json(Group::all(), 200);
    }

    public function getOne($id){
        return response()->json(Group::find($id), 200);
    }

    public function create(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'gameMaster' => 'required'
        ]);

        $group = Group::create($request->all());

        return response()->json($group, 201);
    }

    public function update($id, Request $request){

        $group = Group::findOrFail($id);
        $group->update($request->all());

        return response()->json($group, 200);
    }

    public function delete($id){
        $group = Group::findOrFail($id);
        $group->delete();

        return response()->json($group, 200);
    }
}