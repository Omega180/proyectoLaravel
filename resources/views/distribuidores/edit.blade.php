@extends('layouts.layout')
@section('crear')
<div class='container'>
    <h2>Editar Registros</h2>
    <form method='POST' action="{{url('/editarDistribuidor/'.$distribuidor->id)}}" class='container m-2'>
        @csrf
        @method('PUT')
       <div class='mb-3'> 
            <label for="nombre" class='form-label'>Nombre</label>
            <input type="text" value="{{$distribuidor->nombre}}" id='nombre' name='nombre' class='form-control m-2' placeholder='nombre'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="razon_social">Razon Social</label>
            <input type="text" value="{{$distribuidor->razon_social}}"id='razon_social' name='razon_social' class='form-control m-2' placeholder='razon_social'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="rut">Rut</label>
            <input type="text" value="{{$distribuidor->rut}}"id='rut' name='rut' class='form-control m-2' placeholder='rut'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="direccion">Direccion</label>
            <input type="text" value="{{$distribuidor->direccion}}"id='direccion' name='direccion' class='form-control m-2' placeholder='direccion'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="rubro">Rubro</label>
            <input type="text" value="{{$distribuidor->rubro}}"id='rubro' name='rubro' class='form-control m-2' placeholder='rubro'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="correo">Correo</label>
            <input type="text" value="{{$distribuidor->correo}}"id='correo' name='correo' class='form-control m-2' placeholder='correo'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="telefono">Telefono</label>
            <input type="number" value="{{$distribuidor->telefono}}"id='telefono' name='telefono' class='form-control m-2' placeholder='telefono'>
        </div>
        <a href="{{url('/articulos')}}" class='btn btn-secundary' tabindex="5" >Cancelar</a>
        <button class='btn btn-primary m-2'>Submit</button>
    </form>
</div>
@endsection