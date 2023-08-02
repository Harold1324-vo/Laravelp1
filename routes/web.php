<?php

use Illuminate\Support\Facades\Route;

//Especificar que se usará el controlador
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

/*  
    Se cambia la función anónima por el nombre del controlador que administra el/los métodos que retornas una vista.

    Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', HomeController::class);

/* Un controlador administra 3 rutas, pero dentro de un array se coloca el nombre del controlador y la función que
   administra la ruta.
   Lo que está entre {} es la variable que se recibe en la URL

Route::get('cursos', [LoginController::class, 'index']);
Route::get('cursos/create', [LoginController::class, 'create']);
Route::get('cursos/{curso}', [LoginController::class, 'show']); */

/* Se puede hacer un grupo de rutas.
    Se especifica el nombre del controlador.
    Se agrupan todas las funciones.
    Se especifican los métodos que ocupa cada ruta. */
Route::controller(LoginController::class)->group(function () {
    Route::get('cursos', 'index');
    Route::get('cursos/create', 'create');
    Route::get('cursos/{curso}', 'show');
});
