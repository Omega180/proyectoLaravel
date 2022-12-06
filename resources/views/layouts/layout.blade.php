<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">


    <title>Administrador de Proveedores @yield('title')</title>
</head>

<body  class="d-flex flex-column min-vh-100 mainBody ">
    <div class="header">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
            <div class="container">
            <a href="{{route('vistaPrincipal')}}" class="navbar-brand navtitle">Administrador de Proveedores</a> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="{{route('vistaPrincipal')}}" class="nav-link active" aria-current="page">Pantalla Principal</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('paginaDistribuidores')}}" class="nav-link active" aria-current="page">Lista de Proveedores</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto">
                   
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    @yield('vistaPrincipal')
    @yield('vistaLista')
    @yield('vistaDetalle')
    @yield('vistaCorreo')
    @yield('crear')
<Footer class="mt-auto">
        <nav class="navbar bg-light d-flex justify-content-between">
            <a href="{{route('vistaPrincipal')}}" class="navbar-brand m-1">Ciro Delgado and Sebastian Olguin Copyright &copy;</a>
            <p class="fs-5 m-1">Pagina hecha con fines educativos</p>
        </nav>
    </Footer>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('js')
    </div>
    
</body>
<style>
    body {
        background: url(background2.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        background-size: cover;
    }
    .navtitle {
    font-size: 30px;
    }
    .nav-link {
        font-size: 20px
    }
</style>
</html>
