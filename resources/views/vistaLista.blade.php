@extends('layouts.layout')
@section('vistaLista')
<section class='container-fluid d-flex justify-content-center align-items-center position-absolute top-50 start-50 translate-middle'>
    <div class="container ">
    <button  class="btn btn-primary mb-2">
        <a href="{{route('vistaCrud')}}" class="bg-white">Agregar un Proveedor</a>
    </button>
        <table class="table table-hover table-dark border border-secondary rounded">
            <thead> 
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Razon Social</th>
                    <th scope="col">Rut</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Rubro</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
        <tbody>
            <tr>
                <th scope="row">Distribuidora1</th>
                <td>Distribuidora1</td>
                <td>76.758.847-K</td>
                <td>Catedral 4045, Quinta Normal</td>
                <td>Perfumeria</td>
                <td>Victoriasecret@gmail.com</td>
                <td>9 4356 8973</td>
                <td>
                <button class="btn btn-primary">
                        <a class="bg-light" href="{{route('vistaDetalle')}}">Detalles</a>
                    </button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">Distribuidora2</th>
                <td>Distribuidora2</td>
                <td>76.432.567-2</td>
                <td>San Pablo 4040, Quinta Normal</td>
                <td>Licoreria</td>
                <td>crystalbeer@gmail.com</td>
                <td>9 1569 8975</td>
                <td>
                <button class="btn btn-primary">
                        <a class="bg-light" href="{{route('vistaDetalle')}}">Detalles</a>
                    </button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            <tr>
                <th scope="row">Distribuidora3</th>
                <td>Distribuidora3</td>
                <td>78.543.657-3</td>
                <td>Santo Domingo 3905, Quinta Normal</td>
                <td>Botilleria</td>
                <td>lostressoles@gmail.com</td>
                <td>9 7690 9675</td>
                <td>
                    <button class="btn btn-primary">
                        <a class="bg-light" href="{{route('vistaDetalle')}}">Detalles</a>
                    </button>
                    <button class="btn btn-danger">Eliminar</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection