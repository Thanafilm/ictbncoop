<?php

use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\Multiimage;
use App\Http\Controllers\multipleimg;
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
Route::apiResource('announce', AnnounceController::class);
// Route::post('upload',[AnnounceController::class,'create_announce']);
Route::post('upimg',[ImageController::class,'uploadimage']);

