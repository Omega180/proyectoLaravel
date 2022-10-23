@extends('layouts.layout')
@section('vistaPrincipal')
<section class='contenidoPrincipal'>
    <div class="container d-flex justify-content-center">
        <img src="logolorem.png" width="600" height="400" alt="">
    </div>
    <div class='container-sm'>
        <div class="card">
            <div class="card-body">
            <span class="fs-3">Bienvenido al sistema de manejo de proveedores, abajo puedes encontrar los links hacia la lista completa de proveedores, asi como el acceso al sistema de mail</span>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex justify-content-evenly mt-3">
        <button class="btn btn-primary">
            <a class="bg-light" href="{{route('vistaLista')}}">
            Lista de proveedores
            </a> 
            
        </button>
        <button class="btn btn-primary">
            <a class="bg-light" href="{{route('vistaCorreo')}}">Correos</a>
        </button> 
    </div>
</section>
@endsection