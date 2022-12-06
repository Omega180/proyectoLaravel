@extends('layouts.layout')
@section('vistaCorreo')
<div class="container-lg m-2 position-absolute top-50 start-50 translate-middle">
    <div class="card m-2">
        <form method="POST" action="{{ url('/enviarCorreo') }}" class="m-2 container">
        @csrf
            <div class="contenedor-select">
                    <label for="selectProveedor" class="form-label">PROVEEDOR</label>
                    <select name="selectProveedor" class="form-control">
                        <option value="No Proveedor" selected disabled>-Seleccione un Distribuidor-</option>
                    @foreach($distribuidores as $distribuidor)
                        <option id="{{$id = $distribuidor->id}}" value="{{$value = $distribuidor->nombre}}">{{$distribuidor->nombre}}</option>
                    @endforeach
                    </select>
                </div>
                <div class="contenedor-form">
                    <div class="mb-3">
                        <label for="correo" class="form-label">Direccion de Correo</label>
                        <select name="selectEmail" class="form-control" id="selectEmail">
                            <option value="No Value">-Seleccione un correo</option>
                            @foreach($distribuidores as $distribuidor)
                                <option value="{{$value = $distribuidor->correo}}">{{$distribuidor->correo}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="asunto" class="form-label">Asunto</label>
                        <input type="text" name="asunto" class="form-control" id="asunto" rows="3"></input>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" name="informacion" id="informacion" rows="3"></textarea>
                    </div>
            </div>
            <div class="m-2">
                <a href="" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
    <style>
            label {
                font-size: 25px;
                font-weight: bold;
            }
            body {
                backgroud
            }
        </style>
    </div>
    @endsection