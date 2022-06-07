<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColourController;
use App\Http\Controllers\DogController;
use App\Http\Controllers\HightController;
use App\Http\Controllers\VidaController;
use App\Http\Controllers\OriginController;



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

Route::get('/colours', [ColourController::class, 'index']);
Route::get('/colours/{id}', [ColourController::class, 'show']);
Route::post('/colours', [ColourController::class, 'store']);
Route::delete('/colours/{id}', [ColourController::class, 'delete']);
Route::put('/colours/{id}', [ColourController::class, 'update']);

Route::get('/dogs', [DogController::class, 'index']);
Route::get('/dogs/{id}', [DogController::class, 'show']);
Route::post('/dogs', [DogController::class, 'store']);
Route::delete('/dogs/{id}', [DogController::class, 'delete']);
Route::put('/dogs/{id}', [DogController::class, 'update']);

Route::get('/hights', [HightController::class, 'index']);
Route::get('/hights/{id}', [HightController::class, 'show']);
Route::post('/hights', [HightController::class, 'store']);
Route::delete('/hights/{id}', [HightController::class, 'delete']);
Route::put('/hights/{id}', [HightController::class, 'update']);

Route::get('/vidas', [VidaController::class, 'index']);
Route::get('/vidas/{id}', [VidaController::class, 'show']);
Route::post('/vidas', [VidaController::class, 'store']);
Route::delete('/vidas/{id}', [VidaController::class, 'delete']);
Route::put('/vidas/{id}', [VidaController::class, 'update']);

Route::get('/origins', [OriginController::class, 'index']);
Route::get('/origins/{id}', [OriginController::class, 'show']);
Route::post('/origins', [OriginController::class, 'store']);
Route::delete('/origins/{id}', [OriginController::class, 'delete']);
Route::put('/origins/{id}', [OriginController::class, 'update']);
