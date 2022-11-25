<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConsolasController;
use App\Http\Controllers\VideojuegosController;
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

Route::get('/videojuegos', function () {
    return view('videojuegos');
});

Route::get('/consolas/info', function () {
    return view('consolas/info');
});

Route::get('/consolas/create', [ConsolasController::class, 'create']);
Route::get('/consolas',[ConsolasController::class, 'index']);
/*
Route::get("/videojuegos",[VideojuegosController::class,"index"]);
Route::get("/videojuegos/create",[
    VideojuegosController::class, "create"]);
    */

Route::resource("/videojuegos",VideojuegosController::class);