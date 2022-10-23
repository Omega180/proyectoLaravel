@extends('layouts.layout')
@section('articulos')
<a href="{{url('crear')}}" class='btn btn-primary'>Crear</a>
<table class='container-sm table table-dark table-striped'>
    <thead>
        <tr>
            <th scope='col'>id</th>
            <th scope='col'>Codigo</th>
            <th scope='col'>Descripcion</th>
            <th scope='col'>Cantidad</th>
            <th scope='col'>Precio</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>
                {{$producto->id}}
            </td>
            <td>
                {{$producto->codigo}}
            </td>
            <td>
                {{$producto->descripcion}}
            </td>
            <td>
                {{$producto->cantidad}}
            </td>
            <td>
                {{$producto->precio}}
            <td>
                <a href="{{url('/edit/'.$producto->id)}}" class='btn btn-primary'>Editar</a>
                <form action="{{url('/eliminar/'.$producto->id)}}" class="d-inline formulario-eliminar">
                    @method('DELETE')
                    @csrf
                    <button type='submit' class='btn btn-danger'>Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection


@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@if(session('eliminar') == 'ok')
<script>
    Swal.fire('Eliminado!', 'El registro ha sido eliminado correctamente', 'success')
</script> 
@endif
<script>
    $('.formulario-eliminar').submit(function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Esta seguro?',
            text: 'No podras volver atras!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            cancelButtonText: 'Cancelar',
        }).then((result) => {
            if(result.isConfirmed) {
                this.submit();
            }
        })
    });
</script>
@endsection