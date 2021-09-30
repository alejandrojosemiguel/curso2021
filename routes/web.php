<?php

use App\Http\Controllers\ContactanosController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QueryController;
use App\Http\Controllers\ClientController;


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

Route::get('/', HomeController::class)->name('home');

Route::view('nosotros', 'nosotros')->name('nosotros');

// Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');

// Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

// Route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

// Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store'); 

// Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit'); 

// Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

// Route::delete('/cursos/{curso}', [CursoController::class, 'destroy'])->name('cursos.destroy');

Route::get('asignaturas/export', [CursoController::class,'export'])->name('cursos.export');

Route::get('asignaturas/excel', [CursoController::class,'storeExcel'])->name('cursos.excel');

Route::resource('asignaturas', CursoController::class)
        ->middleware(['auth:sanctum', 'verified'])
        ->parameters(['asignaturas'=>'curso'])
        ->names('cursos');

Route::get('contactanos', [ContactanosController::class, 'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('prueba/mw', function () {
    // $fecha = New DateTime();
    // echo auth()->user()->birthday;
    // echo $fecha->modify('-18 year')->format('Y-m-d');
    return "accediste correctamente a la ruta";
})->middleware(['auth:sanctum','age'])->name('prueba.mw');

Route::get('prueba/na', function () {
    return "No es mayor de edad";
})->name('prueba.na');


Route::get('query', [QueryController::class, 'index'])->name('query.index');
Route::get('client', [ClientController::class, 'index'])->name('client.index');

Route::get('app', function () { 
    return view('layouts.vueapp'); 
})->name('vueapp');

