<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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


    // Test database connection 
    // try { 
    //     DB::connection()->getPdo(); 
    // } catch (\Exception $e) {
    //     die("Could not connect to the database. Please check your configuration. error:" . $e ); 
    // }

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class,'index']);

Route::get('cursos/create',[CursoController::class,'create']);

Route::get('cursos/{curso}',[CursoController::class,'show']);

// Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
//     if(is_null($categoria)){
//         return "Bienvenido a la página del curso de ".$curso;
//     }else{
//         return "Bienvenido a la página del curso de ".$curso." de la categoria ".$categoria;
//     }
// });

