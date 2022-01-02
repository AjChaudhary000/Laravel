<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPollController;
use App\Http\Controllers\UserPollController;
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
    return view('AdminLogin');
});
Route::post('/cheakAdminLogin',[AdminPollController::class,'AdminLoginCheck']);
Route::get('/AdminHome',[AdminPollController::class,'AdminHomePage']);
Route::post('/addpoll',[AdminPollController::class,'adminaddpoll']);
Route::get('/UserPoll',[UserPollController::class,'userpolldata']);
Route::post('/Showresult',[UserPollController::class,'showresultdata']);