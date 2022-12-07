@extends('layouts.layout')
@section('vistaPrincipal')
<section class='contenidoPrincipal'>
    <div class="container d-flex contenedorGrande">
        <div>
            <div class="container d-flex justify-content-center">
                <img src="logoConFondo.png" class="m-5 rounded"alt="">
            </div>
            <div class='container-sm'>
                <div class="card">
                    <div class="card-body">
                    <span class="fs-3">Bienvenido al sistema de manejo de proveedores, abajo puedes encontrar los links hacia la lista completa de proveedores, puedes acceder al sistema de correos en los detalles de cada proveedor, al lado derecho tienes los registros de últimos correos enviados con su respectiva información.</span>
                    </div>
                </div>
            </div>

            <div class="container-fluid d-flex justify-content-evenly mt-3 mb-3">
                    <div>
                        <a class="btn btn-primary btn_lista" href="{{route('paginaDistribuidores')}}">
                            Lista de proveedores
                        </a> 
                    </div>
            </div>
        </div>
        <div class="container mt-2 correosDiv card">
            <div class="card-title m-2  ">
                    <h1 class="tituloCard">Registros de los últimos correos enviados</h1>
                </div>
            <div class="card m-2">
                @foreach($emailLogs as $emailLog)
                <div class="card m-2">
                    <div class="card-title m-2">
                        <h1>Correo enviado hacía: {{$emailLog->nombre_proveedor}}</h1>
                    </div>
                    <div class="card-body m-2">
                        <p>Por agente: {{$emailLog->usuario}}</p>
                        <p>Con el asunto: {{$emailLog->asunto}}</p>
                        <p>Con el mensaje: {{$emailLog->mensaje}}</p>
                        <p>En la fecha: {{$emailLog->created_at}}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        
    </div>
    
    <style>
        .contenedorGrande .correosDiv{
            margin:4px, 4px;
            padding: 4px;
            background-color: grey;
            width: 100vh;
            height: 80vh;
            overflow-x: hidden;
            overflow-y: scroll;
            text-align: justify;
        }
        .contenedorGrande .card-title .tituloCard {
            color: white;
            margin: 5px;
        }
        .correosDiv p {
            font-size: 20px;
        }
        .btn_lista {
            width: 20vh;
            height: 10vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3vh;

        }
    </style>
</section>
@endsection