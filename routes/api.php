<?php

use Illuminate\Http\Request;
use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/* Gestión de Libros */
// Mostrar el listado de libros completo definido en el controlador de Libros
Route::get('/mostrarLibros', [LibrosController::class, 'listLibros']);
//guardamos el libro
Route::post('/saveLibros', [LibrosController::class, 'guardarLibros']);
// Buscar un libro por su código (ID)
Route::get('/findLibros/{codigo_libros}', [LibrosController::class, 'buscarLibros']);
// Definir la ruta para actualizar un libro por su código (ID)
route::put('/updatelibros/{codigo_libros}', [LibrosController::class, 'actualizarlibros']);
//Eliminar un libro
route::delete('/deletelibros/{codigo_libros}', [LibrosController::class, 'eliminarlibros']);
/* Fin gestión de pasajeros */
