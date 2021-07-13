<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Controllers\HomeController;
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

// Route::view('/home', 'home',[HomeController::class, 'index'])->middleware('auth','Rolecheck');
Route::get('/test',[HomeController::class, 'test']);
// Route::middleware(['auth', 'rolecheck'])->group(function () {

// });
Route::get('/home',[HomeController::class, 'index'])->middleware('auth','Rolecheck');
