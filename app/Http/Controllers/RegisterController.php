<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register (Request $request)
    {

        //info('here',[request()->all()]);
        try{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->team = $request->team;
            $user->save();
            return response()->json(['success'=>'User created successfully.']);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(['error'=>$ex->getMessage()]);
        }
    }

    public function logout()
    {
       try{
              auth()->logout();
              return response()->json(['success'=>'User logged out successfully.']);
         }
         catch(\Illuminate\Database\QueryException $ex){
              return response()->json(['error'=>$ex->getMessage()]);
       }
    }

    public function update($id, Request $user)
    {
        try{
            $user = User::find($id);
            $user->name = $user->name;
            $user->email = $user->email;
            $user->team = $user->team;
            $user->password = Hash::make($user->password);
            $user->save();
            return response()->json(['success'=>'User updated successfully.']);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(['error'=>$ex->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return response()->json('Product deleted!');
    }
    
        
   
    public function edit($id, Request $request)
    {
        try{
            $user = User::find($id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->team = $request->team;
            $user->password = Hash::make($request->password);
            $user->save();
            return response()->json(['success'=>'User updated successfully.']);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(['error'=>$ex->getMessage()]);
        }
    }

   public function count()
     {
        try{
            $user = new User();
            $countAbc = $user->where('team','ABC')->count();
            return response()->json(['countAbc'=>$countAbc]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(['error'=>$ex->getMessage()]);
        }
    }

    public function count2()
     {
        try{
            $user = new User();
            $countCambodia = $user->where('team','Cambodia')->count();
            return response()->json(['countCambodia'=>$countCambodia]);
        }
        catch(\Illuminate\Database\QueryException $ex){
            return response()->json(['error'=>$ex->getMessage()]);
        }
    }

    public function count3()
    {
       try{
           $user = new User();
           $countAncher = $user->where('team','Ancher')->count();
           return response()->json(['countAncher'=>$countAncher]);
       }
       catch(\Illuminate\Database\QueryException $ex){
           return response()->json(['error'=>$ex->getMessage()]);
       }
   }

   


}
   

