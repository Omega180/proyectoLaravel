@extends('layouts.layout')
@section('vistaDetalle')
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<div class="container d-flex justify-content-center">
    <div class="container-lg m-2 containerCard">
        <div class="card" style="width: auto;">
            <div class="card-body">
                <h2 class="card-title">NOMBRE PROVEEDOR: {{$distribuidor->nombre}}</h2>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">RUT: {{$distribuidor->rut}}</li>
                <li class="list-group-item">RAZON SOCIAL: {{$distribuidor->razon_social}}</li>
                <li class="list-group-item">CORREO: {{$distribuidor->correo}}</li>
                <li class="list-group-item">DIRECCION: {{$distribuidor->direccion}}</li>
                <li class="list-group-item">RUBRO: {{$distribuidor->rubro}}</li>
                <li class="list-group-item">TELEFONO: {{$distribuidor->telefono}}</li>
            </ul>
            <div class="card-body">
                <a href="{{url('/editDistribuidor/'.$distribuidor->id)}}" class='btn btn-primary'>EDITAR</a>
            </div>
        </div>
    </div>
    <div class="container-lg m-2 containerForm">
        <div class="card m-2">
            <h2 class="card-title ms-4 mt-4">Enviar un Correo</h3>
            <form method="POST" action="{{ url('/enviarCorreo') }}" class="card-body m-2 container">
            @csrf
                <div class="contenedor">
                        <label for="selectProveedor" class="form-label">PROVEEDOR</label>
                        <input type="text" name="proveedor" class="form-control" id="proveedor" value="{{$value = $distribuidor->nombre}}" rows="3"></input>

                    </div>
                    <div class="contenedor-form">
                        <div class="mb-3">
                            <label for="correo" class="form-label">Direccion de Correo</label>
                            <input type="email"  value="{{$value = $distribuidor->correo}}" placeholder="{{$value = $distribuidor->correo}}" name="correo" class="form-control" id="correo"  rows="3"></input>

                        </div>
                        <div class="mb-3">
                            <label for="asunto" class="form-label">Asunto</label>
                            <input type="text" required name="asunto" class="form-control" id="asunto" rows="3"></input>
                        </div>
                        <div class="mb-3">
                            <label for="mensaje" class="form-label">Mensaje</label>
                            <textarea class="form-control" required name="informacion" id="informacion" rows="3"></textarea>
                        </div>
                </div>
                <div class="m-2">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
        <style>
                label {
                    font-size: 25px;
                    font-weight: bold;
                }
                .containerCard div {
                    font-size: 30px;
                    width: 60vh
                }
                .containerForm .card{
                    width: 60vh;
                }
                body {
                    background: url(background2.jpg), url(background1.jpg) no-repeat center center fixed;
                    -webkit-background-size: cover;
                    background-size: cover;
                }
            
            </style>
        </div>
</div>

@endsection