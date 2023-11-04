<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;


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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*Route::controller(ProgramController::class)->group(function(){
    Route::get('programs/create','create');
    Route::post('programs/create','store');
    Route::get('programs/delete/{id}','delete');
    Route::get('programs/edit/{id}','edit');
    Route::post('programs/edit/{id}','update');
});*/
