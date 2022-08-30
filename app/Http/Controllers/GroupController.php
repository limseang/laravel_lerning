<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function create(Request $request)
    {
        $group = new Group();
        $group->name = $request->name;
       
        $group->save();
       
        return response()->json($group);
    }

    public function index(Request $request)
    {
        $group = Group::all();
        return response(['group'=>$group]);
    }

    public function destroy($id)
    {
        $group = Group::find($id);
        $group->delete();
        return response()->json($group);
    }
    public function show($id) 
   {
       $group = group::where('id', $id)->first();
       return response()->json($group);
    }

    public function edit(Request $request, $id)
    {
        $group = Group::find($id);
        $group->name = $request->name;
     
        $group->save();
        return response()->json($group);
    }

    //join group_id with role_id
    public function join(Request $request, $id)
    {
        $group = Group::find($id);
       
        $group->save();
        return response()->json($group);
    }

       public function index2(Request $request)
    {
        $group = group::select('id as key' , 'name as label', 'name as data',)->get();
        // [
        //     {key:1, label:'admin', data:'admin',children:''},
        // ]
        $group->map(function ($item) {
            $permissions = explode('#', $item->permission);
            $permissionObject = [];
            foreach ($permissions as $key => $value) {
                $permissionObject[] = [
                    'key' => $item->key."-".$key,
                    'label' => $value,
                    'data' => $value,
                ];                
            }
            $item->children = $permissionObject;
            return $item;
        });
        return response(['group'=>$group]);
    }
}
