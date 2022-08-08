<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User as ModelsUser;

use function GuzzleHttp\Promise\all;

use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id) 
    {
        $user = User::where('id', $id)->first();
        return response()->json($user);
     }
    // public function show($id)
    // {
    //     {
    //         $user = new User();
    //         $user = $user->where('id', $id)->first();
            
    //     }


    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

   public function login(Request $request)
   {
         $credentials = [
            
              'email' => $request->email,
              'password' => $request->password,
         ];
    
         if (Auth::attempt($credentials)) {
              $success = true;
              $message = 'User login successfully';
         } else {
              $success = false;
              $message = 'Unauthorised';
         }
    
         // response
         $response = [
              'success' => $success,
              'message' => $message,
         ];
         return response()->json($response);
   }

    public function logout(Request $r)

    {
      $r -> session() -> forget('user');
      $r -> session() -> flush();
      return redirect('/admin/login');
    }

    



}
