<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::post('login', [\App\Http\Controllers\API\AuthController::class, 'signin']);
// Route::post('register', [AuthController::class, 'signup']);
     
Route::middleware('auth:sanctum')->group( function () {
    Route::resource('cursos', \App\Http\Controllers\API\CursoController::class);
});

Route::middleware('api')->group(function () { 
    Route::resource('products', ProductController::class); 
});

