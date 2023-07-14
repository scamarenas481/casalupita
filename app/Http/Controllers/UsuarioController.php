<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function index(){
        $currentPage = 'usuario';
        return view('Usuarios/index',compact('currentPage'));
    }
    public function create(){
        return view('Usuarios/crear');
    }
    public function delete(){
        return view('Usuarios/eliminar');
    }
    public function show(){
        return view('Usuarios/mostrar');
    }
    public function modify(){
        return view('Usuarios/editar');
    }
}
