<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminLoginController;


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









Route::group(['middleware' => ['auth']], function () {
    Route::get('/back-end/user', [AdminController::class, 'index']);
});


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/admin/user', [AdminController::class, 'index']);


Route::post('register',[RegisterController::class, 'register']);
Route::post('login',[AdminLoginController::class, 'login']);

Route::post('/edit/user/{id}', [RegisterController::class, 'edit']);
Route::get('user/{id}', [AdminLoginController::class, 'show']);
Route::get('/count/user/', [RegisterController::class, 'count']);
Route::get('/count2/user/', [RegisterController::class, 'count2']);
Route::get('/count3/user/', [RegisterController::class, 'count3']);
Route::post('/delete/user/{id}', [RegisterController::class, 'destroy']);
Route::get('logout', [RegisterController::class, 'logout'])->middleware('auth');


Route::any('/{any}', function () {
    return view('app');
})->where('any', '.*');









