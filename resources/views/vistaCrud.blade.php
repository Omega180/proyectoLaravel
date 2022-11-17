@extends('layouts.layout')
@section('vistaCrud')
    <div class="container d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle">
    <form class="">
            <div class="mb-3">
                <label for="nombreProvedoor" class="form-label">Nombre del Proveedor</label>
                <input type="text" id="nombreProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="razonSocialProveedor" class="form-label">Razon Social</label>
                <input type="text" id="razonSocialProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="rutProveedor" class="form-label">Rut</label>
                <input type="text" id="rutProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="direccionProveedor" class="form-label">Direccion</label>
                <input type="text" id="direccionProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="rubroProveedor" class="form-label">Rubro</label>
                <input type="text" id="rubroProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="correoProveedor" class="form-label">Correo</label>
                <input type="email" id="correoProveedor"  class="form-control">
            </div>
            <div class="mb-3">
                <label for="telefonoProveedor" class="form-label">Telefono</label>
                <input type="number" id="telefonoProveedor"  class="form-control">
            </div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </form>
    </div>

        @endsection