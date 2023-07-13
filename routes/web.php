<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   //return view('welcome');
   return "Bienvenido a la pagina principal este sera el login";
});

Route::get('usuarios',function(){
    return "bienvenido a la pagina usuarios";
});

Route::get('conteos',function(){
    return "bienvenido a la pagina conteos";
});
Route::get('productos',function(){
    return "bienvenido a la pagina productos";
});
Route::get('marcas/',function(){
    return "bienvenido a la pagina Marcas";
});
Route::get('fabricantes',function(){
    return "bienvenido a la pagina fabricantes";
});
Route::get('proveedores',function(){
    return "bienvenido a la pagina usuarios";
});
Route::get('ubicaciones',function(){
    return "bienvenido a la pagina ubicaciones";
});

Route::get('lineas',function(){
    return "bienvenido a la pagina lineas";
});
Route::get('unidades',function(){
    return "bienvenido a la pagina unidades";
});
Route::get('ordenes',function(){
    return "bienvenido a la pagina ordenes";
});
Route::get('incidencias',function(){
    return "bienvenido a la pagina incidencias";
});
Route::get('faltantes',function(){
    return "bienvenido a la pagina faltantes";
});
