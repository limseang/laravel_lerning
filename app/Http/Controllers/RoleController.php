<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //create role
    public function create(Request $request)
    {
        $role = new Role();
        $role->name = $request->name;
        $role->fnt = $request->fnt;
        $role->save();
       
        return response()->json($role);
    }

    public function index(Request $request)
    {
        $role = Role::all();
        return response(['fnt'=>$role]);
    }

    public function destroy($id)
    {
        $role = Role::find($id);
        $role->delete();
        return response()->json($role);
    }
    public function show($id) 
   {
       $role = role::where('id', $id)->first();
       return response()->json($role);
    }

    public function edit(Request $request, $id)
    {
        $role = Role::find($id);
        $role->name = $request->name;
        $role->fnt = $request->fnt;
        $role->save();
        return response()->json($role);
    }

    //show all role
    public function showAll()
    {
        $role = Role::all();
        return response()->json($role);
    }

    public function index2(Request $request)
    {
        $role = Role::select('id as key' , 'name as label', 'name as data',)->get();
        // [
        //     {key:1, label:'admin', data:'admin',children:''},
        // ]
        $role->map(function ($item) {
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
        return response(['role'=>$role]);
    }
 


}
