@extends('layouts.layout')
@section('vistaCorreo')
<div class='container'>
    <div class="card m-2 mt-5 container">
        <div class="card-title">
            <h2 class="m-2 ">Editar Registros</h2>
        </div>
        <form method='POST' action="{{url('/editarDistribuidor/'.$distribuidor->id)}}" class='container m-2'>
            @csrf
            @method('PUT')
            <div class="row">
                <div class='col mb-3'> 
                    <label for="nombre" class='form-label'>Nombre</label>
                    <input type="text" minlength="5" maxlength="100" required value="{{$distribuidor->nombre}}" id='nombre' name='nombre' class='form-control m-2' placeholder='Ejemplo: Nestle'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="razon_social">Razón Social</label>
                    <input type="text" required maxlength="100" value="{{$distribuidor->razon_social}}"id='razon_social' name='razon_social' class='form-control m-2' placeholder='Ejemplo: Nestle inc'>
                </div>
            </div>
           <div class="row">           
                <div class='col mb-3'>
                    <label class='form-label' for="rut">Rut</label>
                    <input type="text" required minlength="12" value="{{$distribuidor->rut}}"id='rut' name='rut' class='form-control m-2' placeholder='Ejemplo: 90.703.000-8'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="direccion">Dirección</label>
                    <input type="text" maxlength="100" required value="{{$distribuidor->direccion}}"id='direccion' name='direccion' class='form-control m-2' placeholder='Ejemplo: Santo Domingo 1702'>
                </div>
        </div>
            <div class="row">
                <div class='col mb-3'>
                    <label class='form-label' for="rubro">Rubro</label>
                    <input type="text" minlegth="10" required maxlength="100" value="{{$distribuidor->rubro}}"id='rubro' name='rubro' class='form-control m-2' placeholder='Ejemplo: Venta de productos lacteos'>
                </div>
                <div class='col mb-3'>
                    <label class='form-label' for="correo">Correo</label>
                    <input type="text" required value="{{$distribuidor->correo}}"id='correo' name='correo' class='form-control m-2' placeholder='Ejemplo: Nestle@nestle.cl'>
                </div>
            </div>

            <div class='mb-3'>
                <label class='form-label' for="telefono">Teléfono</label>
                <input type="number" required value="{{$distribuidor->telefono}}"id='telefono' name='telefono' class='form-control m-2' placeholder='Ejemplo: 223384000'>
            </div>
            <div class="mb-3 d-flex align-items-center">
                <label class="form-check=label" for="listaNegraSiNo">Agregar a lista negra?</label>
                <input class="form-check-input checkboxListaNegra ms-2" type="checkbox" id="checkboxListaNegra" name="listaNegraSiNo">
            </div>
            <a href="{{route('paginaDistribuidores')}}" class='btn btn-danger' tabindex="5" >Cancelar</a>
            <button class='btn btn-primary m-2'>Submit</button>
        </form>
        <style>
            label {
                font-size: 25px;
                font-weight: bold;
            }
            body {
                    background: url(background2.jpg), url(background1.jpg) no-repeat center center fixed;
                    -webkit-background-size: cover;
                    background-size: cover;
                }
                .checkboxListaNegra {
                    width: 30px;
                    height: 30px
                }
            
        </style>
    </div>
</div>
@endsection