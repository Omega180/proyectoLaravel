@extends('layouts.layout')
@section('vistaDetalle')
<div class="container-lg m-2 position-absolute top-50 start-50 translate-middle">
    <div class="card" style="width: auto;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">NOMBRE PROVEEDOR</h5>
            <p class="card-text">Observaciones Proveedor</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">RUT</li>
            <li class="list-group-item">RAZON SOCIAL</li>
            <li class="list-group-item">DIRECCION</li>
            <li class="list-group-item">RUBRO</li>
            <li class="list-group-item">TELEFONO</li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">EDITAR</a>
            <a href="#" class="card-link">CORREO</a>
        </div>
    </div>
</div>
@endsection