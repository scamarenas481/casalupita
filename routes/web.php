<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', HomeController::class);

Route::controller(UsuarioController::class)->group(function () {
    Route::get('usuarios/index', 'index');
    Route::get('usuarios/create', 'create');
    Route::get('usuarios/modify', 'modify');
    Route::get('usuarios/delete', 'delete');
    Route::get('usuarios/show', 'show');
});

Route::get('conteos', function () {
    return "bienvenido a la pagina conteos";
});
Route::get('productos', function () {
    return "bienvenido a la pagina productos";
});
Route::get('marcas', function () {
    return "bienvenido a la pagina Marcas";
});
Route::get('fabricantes', function () {
    return "bienvenido a la pagina fabricantes";
});
Route::get('proveedores', function () {
    return "bienvenido a la pagina usuarios";
});
Route::get('ubicaciones', function () {
    return "bienvenido a la pagina ubicaciones";
});

Route::get('lineas', function () {
    return "bienvenido a la pagina lineas";
});
Route::get('unidades', function () {
    return "bienvenido a la pagina unidades";
});
Route::get('ordenes', function () {
    return "bienvenido a la pagina ordenes";
});
Route::get('incidencias', function () {
    return "bienvenido a la pagina incidencias";
});
Route::get('faltantes', function () {
    return "bienvenido a la pagina faltantes";
});
Route::get('productos/{producto}', function ($producto) {
    return "bienenido a mi vista $producto del catalogo producto";
});

Route::get('users/{id}', function ($id) {
});
