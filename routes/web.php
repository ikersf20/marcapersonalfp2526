<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProyectosController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'getHome']);

// ----------------------------------------
Route::get('login', function () {

    return "Login usuario";

    return view('auth.login');
});
Route::get('logout', function () {
    return "Logout usuario";
});


// ----------------------------------------
Route::prefix('familias-profesionales')->group(function () {
    Route::get('/', function () {
        return 'Listado familias profesionales';
    });

    Route::get('/create', function () {
        return 'Añadir familia profesional';
    });

    Route::get('/show/{id}	', function ($id) {
        return 'Vista detalle familia profesional ' . $id;
    }) -> where('id', '[0-9]+');

    Route::get('/edit/{id}', function ($id) {
        return 'Modificar familia profesional ' . $id;
    }) -> where('id', '[0-9]+');
});
Route::prefix('proyectos')->group(function () {
    Route::get('/', [ProyectosController::class, 'getIndex']);

    Route::get('create', [ProyectosController::class, 'getCreate']);

    Route::get('show/{id}', [ProyectosController::class, 'getShow']) -> where('id', '[0-9]+');

    Route::get('edit/{id}', [ProyectosController::class, 'getEdit']) -> where('id', '[0-9]+');

    Route::post('store', [ProyectosController::class, 'store']);

    Route::put('update/{id}', [ProyectosController::class, 'update']) -> where('id', '[0-9]+');
});


// ----------------------------------------
Route::get('perfil/{id?}', function ($id = null) {
    if ($id === null)
        return 'Visualizar el usuario propio';
    return 'Visualizar el usuario de ' . $id;
}) -> where('id', '[0-9]+');



