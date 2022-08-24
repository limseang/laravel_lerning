<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\FuntionController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});







//user

Route::group(['middleware' => ['auth']], function () {
  
    Route::get('/back-end/user', [AdminController::class, 'index']);
});




Route::post('/edit/user/{id}', [RegisterController::class, 'edit']);

Route::get('user/{id}', [AdminLoginController::class, 'show']);

Route::get('/count/user/', [RegisterController::class, 'count']);
Route::get('/count2/user/', [RegisterController::class, 'count2']);
Route::get('/count3/user/', [RegisterController::class, 'count3']);
Route::post('/delete/user/{id}', [RegisterController::class, 'destroy']);

Route::post('register',[RegisterController::class, 'register']);




Route::post('login',[AdminLoginController::class, 'login']);


Route::post('/create_role',[RoleController::class, 'create']);

//FNT
Route::post('/create_fnt',[FuntionController::class, 'create']);
Route::get('/back-end/fnt', [FuntionController::class, 'index']); 
Route::get('/back-end/fnt2', [FuntionController::class, 'index2']);
Route::post('/edit/fnt/{id}', [FuntionController::class, 'edit']);
Route::get('fnt/{id}', [FuntionController::class, 'show']);
Route::get('fnt/showAll', [FuntionController::class, 'showAll']);
Route::post('/delete/fnt/{id}', [FuntionController::class, 'destroy']);


//Role
Route::get('/back-end/role', [RoleController::class, 'index']);
Route::post('/delete/role/{id}', [RoleController::class, 'destroy']);
Route::get('/back-end/role2', [RoleController::class, 'index2']); 
Route::get('role/{id}', [RoleController::class, 'show']);
Route::get('role/showAll', [RoleController::class, 'showAll']);

Route::post('/create_role',[RoleController::class, 'create']);

//Group

Route::get('/back-end/group', [GroupController::class, 'index']);
Route::get('/back-end/grouplist', [GroupController::class, 'index2']);
Route::post('/delete/group/{id}', [GroupController::class, 'destroy']);
Route::get('group/{id}', [GroupController::class, 'show']);
Route::post('/edit/group/{id}', [GroupController::class, 'edit']);
Route::post('/create_group',[GroupController::class, 'create']);

//group to role










Route::get('logout', [RegisterController::class, 'logout'])->middleware('auth');


Route::any('/{any}', function () {
    return view('app');
})->where('any', '.*');









