@extends('layouts.layout')
@section('vistaDetalle')
<div class="mainContainer">
    @if($user->id_rol == 1)
    <div class="d-flex justify-content-start container my-2">
        <a href="{{url('crearDistribuidor')}}" class='btn btn-primary'>Crear nuevo distribuidor</a>
    </div>
   @endif
    <table class='container tablaPrincipal table table-dark table-striped mt-4'>
        <thead>
            <tr>
                <th scope='col'>ID</th>
                <th scope='col'>Nombre</th>
                <th scope='col'>Razón Social</th>
                <th scope='col'>Rut</th>
                <th scope='col'>Dirección</th>
                <th scope='col'>Rubro</th>
                <th scope='col'>Correo</th>
                <th scope='col'>Teléfono</th>
                <th scope='col'>Lista Negra?</th>
                <th scope='col'>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Nos traemos los datos del distribuidor dependiendo de la cantidad de distribuidores que hay en la base de datos -->
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
                    @if($distribuidor->listaNegraSiNo == 0) 
                        No
                    @else 
                        Si
                    @endif
                </td>
                <td class="m-2">
                @if ($user->id_rol == 1) 
                    <div class="d-flex justify-content-between divAcciones">
                        <a href="{{url('/editDistribuidor/'.$distribuidor->id)}}" class='btn btn-primary'>Editar</a>
                        <form action="{{url('/eliminarDistribuidor/'.$distribuidor->id)}}" class="d-inline formulario-eliminar">
                            @method('DELETE')
                            @csrf
                            <button type='submit' class='btn btn-danger'>Borrar</button>
                        </form>
                @endif 
                        <a href="{{url('/detalleDistribuidor/'.$distribuidor->id)}}" class='btn btn-light'>Detalles</a>
                    </div>
                    
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>


<style>
    table {
        font-size: 18px;
    }
    .divAcciones {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 2px;
    }
    .mainContainer {
        width: 100%;

    }
    .tablaPrincipal {
       
    }
</style>
@endsection

<!-- Seccion del Swift Alert -->
@section('js')
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- al volver del controlador chequea si se paso el dato eliminar con ok, si esto es asi, dispara la alaerta de eliminado -->
@if(session('eliminar') == 'ok')
<script>
    Swal.fire('Eliminado!', 'El registro ha sido eliminado correctamente', 'success')
</script> 
@endif
<!-- Script que se dispara al presionar el boton delete -->
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