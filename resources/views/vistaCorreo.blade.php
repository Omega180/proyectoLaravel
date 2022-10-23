@extends('layouts.layout')
@section('vistaCorreo')
<div class="container-lg m-2 position-absolute top-50 start-50 translate-middle">
        <div class="contenedor-select">
            <label for="select-proveedor" class="form-label">PROVEEDOR</label>
            <select name="select-proveedor" class="form-control">
                <option value="value1">Proveedor 1</option>
                <option value="value2" selected>Proveedor 2</option>
                <option value="value3">Proveedor 3</option>
            </select>
        </div>
        <div class="contenedor-form">
            <div class="mb-3">
                <label for="correo" class="form-label">Direccion de Correo</label>
                <input type="email" class="form-control" id="correo" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="asunto" class="form-label">Asunto</label>
                <input type="text" class="form-control" id="asunto" rows="3"></input>
            </div>
            <div class="mb-3">
                <label for="mensaje" class="form-label">Mensaje</label>
                <textarea class="form-control" id="mensaje" rows="3"></textarea>
            </div>
        </div>
    </div>
    @endsection