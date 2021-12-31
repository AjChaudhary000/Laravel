<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PoolController;

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
Route::get('/admin_home', function () {
    return view('Welcome_admin');
});

Route::get('/add_pool', function () {
    return view('Addpool');
});

Route::get('/index', function () {
    return view('home');
});

Route::post('/userans' , [PoolController::class ,'Answer'] );

Route::get('/user' , [PoolController::class ,'user'] );

Route::get('/viewans/{id}' , [PoolController::class ,'poolanswer'] );

Route::get('/activepool/{p_id}' , [PoolController::class ,'active'] );

Route::get('/view_pool' , [PoolController::class ,'displaypool'] );

Route::post('/reg' , [PoolController::class ,'register'] );

Route::post('/submit_pool' , [PoolController::class ,'addpool'] );
