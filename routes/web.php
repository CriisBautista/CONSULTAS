<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\postalesController;
use App\Http\Controllers\CPostalController;

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

/* Route::get('/', function () {
    return view('welcome');
}); */

/* Route::get('/inicio', [postalesController::class, 'postales']);
Route::post('inicio/fetch', [postalesController::class, 'fetch'])->name('consultas.fetch'); */

Route::post("inicio", [CPostalController::class, 'mostrarCP']);
Route::view("inicio","inicio");
Route::get("/{Id}", [CPostalController::class, 'verMunicipio'])->name('ver.municipio');
Route::get("/ok/{municipio}", [CPostalController::class, 'verEstado']);
