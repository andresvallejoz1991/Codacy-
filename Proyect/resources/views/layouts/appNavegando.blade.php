<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CroNomía</title>
    <link rel="stylesheet" href="../../../css/estilos.css">
    <link rel="stylesheet" href="../../../css/appPaginacion.css">
</head>
<body>
    <header class="encabezado">
        <img src="../../../img/money-stack 1.png" alt="logo">
        <h1>CroNomía</h1>
        <h2>La Economía Basada en Cromos</h2>
    </header>
    <nav class="menuPrincipalNavegando">
        <div class="menuPrincipal1">
            <a href="/home" class="menu1">
                <img src="../../../img/casa 1.png" alt="menu principal Navegando">
                Inicio
            </a>
            <a href="/usuario/juego" class="menu1">
                <img src="../../../img/controlador-de-gamepad 1.png" alt="menu juego">
                Juego
            </a>
            <a href="/usuario/mostrarAlbum" class="menu1">
                <img src="../../../img/album-de-fotos (1) 1.png" alt="menu album">
                Álbum
            </a>
            <a href="/usuario/intercambio" class="menu1">
                <img src="../../../img/intercambiar 1.png" alt="menu intercambio">
                Intercambio
            </a>
        </div>
        <div class="menuPrincipal3">
            <ul>
                <li>
                    <a class="menuUser">
                        <p class="nombreUser">{{ Auth::user()->name }}</p>
                    </a>
                    <ul>
                        <li>
                            <div class="menuLogout">
                                <a class="menuLogout1" href="{{ route('home.edit', Auth::user()->id) }}">
                                    Editar
                                </a>

                            </div>
                        </li>
                        <li>
                            <div class="menuLogout">
                                <a class="menuLogout1" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Salir') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        @yield('content')
    </div>
    <footer class="piePagina">
        <p class="informacion">
            Copyright © 2021, All Rights Reserved
        </p>
        <ul class="redesSociales">
            <li>
                <a href="https://es-la.facebook.com/utpl.loja/" target="_BLANK">
                    <img src="../../img/facebook-brands 1.png" alt="facebook">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/utpl?lang=es" target="_BLANK">
                    <img src="../../img/Twitter 1.png" alt="twitter">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/utpl/?hl=es-la" target="_BLANK">
                    <img src="../../img/instagram 1.png" alt="instagram">
                </a>
            </li>
        </ul>
        <div class="utpl">
            <img src="../../../img/ba.png" alt="logo UTPL">
        </div>
    </footer>

    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
	<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
</body>
</html>