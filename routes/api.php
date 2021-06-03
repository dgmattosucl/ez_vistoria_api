<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('df/comodos/',[\App\Http\Controllers\ApiController::class,'df_comodos'])->name('df.comodos');
Route::get('df/itens/',[\App\Http\Controllers\ApiController::class,'df_itens'])->name('df.itens');
Route::get('df/itens/tipo/',[\App\Http\Controllers\ApiController::class,'df_itens_tipo'])->name('df.itens.tipo');



Route::middleware(['cors'])->group(function () {
    Route::post('add/vistoria',[\App\Http\Controllers\ApiController::class,'add_vistoria'])->name('add.vistoria');
});
