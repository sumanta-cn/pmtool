<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Controller;
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
Route::middleware(['auth'])->group(function () {
    Route::any('/approveuser',[AjaxController::class, 'approveuser']);
});
// Route::view('/home', 'home',[HomeController::class, 'index'])->middleware('auth','Rolecheck');
Route::get('/test',[HomeController::class, 'test']);
Route::get('/user_list',[HomeController::class, 'userlist'])->middleware('auth','Rolecheck','Checkadmin')->name('user_list');
Route::get('/assign_role',[HomeController::class, 'assignrole'])->middleware('auth','Rolecheck','Checkadmin')->name('assign_role');
Route::get('/home',[HomeController::class, 'index'])->middleware('auth','Rolecheck')->name('home');
Route::get('/noaccess',[Controller::class, 'index']);
