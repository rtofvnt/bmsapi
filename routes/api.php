<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuildingController;


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


Route::get('/flat_occupancy/', [BuildingController::class,'flat_occupancy']);

Route::get('/flat/{building}/{flat}', [BuildingController::class,'flat_occupancy_other']);


Route::post('/post', [BuildingController::class,'post']);

    