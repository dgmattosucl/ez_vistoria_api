<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/documentacao', [\App\Http\Controllers\DocController::class,'index']);
Route::get('/sobre', [\App\Http\Controllers\SobreController::class,'index']);
Route::get('/importacomodos', [\App\Http\Controllers\Controller::class,'ImportaComodos']);

//Auth::routes();


