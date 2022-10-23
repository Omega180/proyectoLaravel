@extends('layouts.layout')
@section('crear')
<div class='container'>
    <h2>Editar Registros</h2>
    <form method='POST' action="{{url('/editar/'.$producto->id) }}" class='container m-2'>
        @csrf
        @method('PUT')
       <div class='mb-3'> 
            <label for="codigo" class='form-label'>Codigo</label>
            <input type="text" id='codigo' name='codigo' class='form-control m-2' value="{{$producto->codigo}}" placeholder='codigo'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="descripcion">Descripcion</label>
            <input value="{{$producto->descripcion}}" type="text" id='descripcion' name='descripcion' class='form-control m-2' placeholder='descripcion'>
        </div>

        <div class='mb-3'>
            <label class='form-label' for="cantidad">Cantidad</label>
            <input value="{{$producto->cantidad}}" type="number" id='cantidad' name='cantidad' class='form-control m-2' placeholder='cantidad'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="precio">Precio</label>
            <input value="{{$producto->precio}}" type="number" id='precio' name='precio' class='form-control m-2' placeholder='precio'>
        </div>
        <a href="{{url('/articulos')}}" class='btn btn-secundary' tabindex="5" >Cancelar</a>
        <button class='btn btn-primary m-2'>Submit</button>
    </form>
</div>
@endsection