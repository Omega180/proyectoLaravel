@extends('layouts.layout')
@section('vistaDetalle')
<div class="d-flex justify-content-start container my-2">
<a href="{{url('crearDistribuidor')}}" class='btn btn-primary'>Crear nuevo distribuidor</a>
</div>

<table class='container-sm table table-dark table-striped'>
    <thead>
        <tr>
            <th scope='col'>ID</th>
            <th scope='col'>Nombre</th>
            <th scope='col'>Razon Social</th>
            <th scope='col'>Rut</th>
            <th scope='col'>Direccion</th>
            <th scope='col'>Rubro</th>
            <th scope='col'>Correo</th>
            <th scope='col'>Telefono</th>
            <th scope='col'>Acciones</th>
        </tr>
    </thead>
    <tbody>
    @foreach($distribuidores as $distribuidor)
        <tr>
            <td>
                {{$distribuidor->id}}
            </td>
            <td>
                {{$distribuidor->nombre}}
            </td>
            <td>
                {{$distribuidor->razon_social}}
            </td>
            <td>
                {{$distribuidor->rut}}
            </td>
            <td>
                {{$distribuidor->direccion}}
</td>
            <td>
                {{$distribuidor->rubro}}
</td>
            <td>
                {{$distribuidor->correo}}
</td>
            <td>
                {{$distribuidor->telefono}}
            </td>
            <td>
                <a href="{{url('/editDistribuidor/'.$distribuidor->id)}}" class='btn btn-primary'>Editar</a>
                <form action="{{url('/eliminarDistribuidor/'.$distribuidor->id)}}" class="d-inline formulario-eliminar">
                    @method('DELETE')
                    @csrf
                    <button type='submit' class='btn btn-danger'>Borrar</button>
                </form>
                <a href="{{url('/detalleDistribuidor/'.$distribuidor->id)}}" class='btn btn-light'>Detalles</a>
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