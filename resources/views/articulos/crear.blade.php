@extends('layouts.layout')
@section('crear')
<div class='container'>
    <form method='POST' action="{{url('/guardar')}}" class='container m-2'>
        @csrf
       <div class='mb-3'> 
            <label for="codigo" class='form-label'>Codigo</label>
            <input type="text" id='codigo' name='codigo' class='form-control m-2' placeholder='codigo'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="descripcion">Descripcion</label>
            <input type="text" id='descripcion' name='descripcion' class='form-control m-2' placeholder='descripcion'>
        </div>

        <div class='mb-3'>
            <label class='form-label' for="cantidad">Cantidad</label>
            <input type="number" id='cantidad' name='cantidad' class='form-control m-2' placeholder='cantidad'>
        </div>
        <div class='mb-3'>
            <label class='form-label' for="precio">Precio</label>
            <input type="number" id='precio' name='precio' class='form-control m-2' placeholder='precio'>
        </div>
        <a href="{{url('/articulos')}}" class='btn btn-secundary' tabindex="5" >Cancelar</a>
        <button class='btn btn-primary m-2'>Submit</button>
    </form>
</div>
@endsection