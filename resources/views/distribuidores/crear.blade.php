@extends('layouts.layout')
@section('crear')
<div class='container'>
    <div class="card m-2 mt-5 container">
        <form method='POST' action="{{url('/guardarDistribuidor')}}" class='container m-2'>
            @csrf
            <div class="row">
                <div class='col mb-3'> 
                    <label for="nombre" class='form-label'>Nombre</label>
                    <input type="text" minlength="5" maxlength="20" id='nombre' name='nombre' class='form-control m-2' required placeholder='Ejemplo: Nestle'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="razon_social">Razon Social</label>
                    <input type="text" required maxlength="20" id='razon_social' name='razon_social' class='form-control m-2' placeholder='Ejemplo: Nestle inc'>
                </div>
            </div>
            <div class="row">
                <div class='col mb-3'>
                    <label class='form-label' for="rut">Rut</label>
                    <input type="text" id='rut' required minlength="11" pattern="^\d{1,2}\.\d{3}\.\d{3}[-][0-9kK]{1}$" name='rut' class='form-control m-2' placeholder='Ejemplo: 90.703.000-8'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="direccion">Direccion</label>
                    <input type="text" maxlength="50" id='direccion' required name='direccion' class='form-control m-2' placeholder='Ejemplo: Santo Domingo 1702'>
                </div>
            </div>
            <div class="row">
                <div class='col mb-3'>
                    <label class='form-label' for="rubro">Rubro</label>
                    <input type="text" id='rubro' minlegth="10" required maxlength="100" name='rubro' class='form-control m-2' placeholder='Ejemplo: Venta de productos lacteos'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="correo">Correo</label>
                    <input type="email" id='correo' required name='correo' class='form-control m-2' placeholder='Ejemplo: Nestle@nestle.cl'>
                </div>
            </div>
            <div class="row">
                <div class='col mb-3'>
                    <label class='form-label' for="telefono">Telefono</label>
                    <input type="text" id='telefono' required name='telefono' class='form-control m-2' placeholder='Ejemplo: (2) 2338 4000'>
                </div>
            </div>

            
            
           
            <a href="{{url('/distribuidores')}}" class='btn btn-danger' tabindex="5" >Cancelar</a>
            <button class='btn btn-primary m-2'>Submit</button>
        </form>
    </div>
    <style>
            label {
                font-size: 25px;
                font-weight: bold;
            }
           
        </style>
</div>
@endsection