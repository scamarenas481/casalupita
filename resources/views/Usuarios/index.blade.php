@extends('layouts.adminBase')
@section('css')
<link rel="stylesheet" href="../../resources/css/usuarioIndex.css">
@endsection
@section('title')
Administrar Usuarios
@endsection

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-center">
        <div class="btn-group-vertical">
            <a href="#" class="btn btn-primary d-block mb-2">Crear</a>
            <a href="#" class="btn btn-primary d-block mb-2">Editar</a>
            <a href="#" class="btn btn-primary d-block mb-2">Eliminar</a>
            <a href="#" class="btn btn-primary d-block">Mostrar</a>
        </div>
    </div>
</div>
@endsection
