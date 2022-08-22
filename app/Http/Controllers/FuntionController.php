<?php

namespace App\Http\Controllers;

use App\Models\Fnt;
use App\Funtion\Function;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FuntionController extends Controller
{

    //create fnt in table function
    public function create(Request $request)
    {
        $fnt = new Fnt();
        $fnt->name = $request->name;
        $fnt->permission = $request->permission;
        $fnt->save();
       
        return response()->json($fnt);
    }

    public function index(Request $request)
    {
        $fnt = Fnt::all();
        return response(['fnt'=>$fnt]);
    }

    public function index2(Request $request)
    {
        $fnt = Fnt::select('id as key' , 'name as label' ,'permission as children', )->get();
        
        return response(['fnt'=>$fnt]);
    }
    //delete fnt in table function
    public function destroy($id)
    {
        $fnt = Fnt::find($id);
        $fnt->delete();
        return response()->json($fnt);
    }

   //show funtion fnt
   public function show($id) 
   {
       $fnt = Fnt::where('id', $id)->first();
       return response()->json($fnt);
    }
    //edit funtion fnt
    public function edit(Request $request, $id)
    {
        $fnt = Fnt::find($id);
        $fnt->name = $request->name;
        $fnt->permission = $request->permission;
        $fnt->save();
        return response()->json($fnt);
    }

    //show all fnt
    public function showAll()
    {
        $fnt = Fnt::all();
        return response()->json($fnt);
    }

}
