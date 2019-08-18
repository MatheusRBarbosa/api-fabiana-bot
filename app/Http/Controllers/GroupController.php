<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function getAll(){
        return response()->json(Group::all());
    }

    public function getOne($id){
        return response()->json(Group::find($id));
    }

    public function create(Request $request){
        $group = Group::create($request->all());

        return response()->json($group, 201);
    }

    public function update($id, Request $request){
        $group = Group::findOrFail($id);
        $group->update($request->all());

        return response()->json($group, 200);
    }

}