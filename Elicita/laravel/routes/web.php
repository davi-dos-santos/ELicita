<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserCOntroller;

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

// Route::get('user/{users}', function(\App\Models\User $user){
//     dd($user);
//     return $user;
// });

Route::get('index/', [UserCOntroller::class, 'show']);

Route::get('index/', [UserCOntroller::class, 'teste']);

//Route::get('/', [HomeController::class, 'home']);
// Route::get('/', 'App\Http\Controllers\homeController@home');
