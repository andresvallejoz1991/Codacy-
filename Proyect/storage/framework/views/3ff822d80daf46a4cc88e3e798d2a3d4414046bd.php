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
        <div class="menuPrincipal4">
            <a href="/homeAdmin" class="menu1">
                <img src="../../../img/gerente 1.png" alt="munu principal Admin">
                Administración
            </a>
            <a href="/administrador/adminUsers">
                <img src="../../../img/users-solid 1.png" alt="registro de usuarios Admin">
                Usuarios
            </a>
            <a href="/administrador/adminAlbum">
                <img src="../../../img/book-solid 1.png" alt="registro de tematicas Admin">
                Álbumes
            </a>
            <a href="/administrador/adminTematicas">
                <img src="../../../img/controlador-de-gamepad 1.png" alt="registro de tematicas Admin">
                Temáticas
            </a>
            <a href="/administrador/uploadCromos">
                <img src="../../../img/cloud-solid 1.png" alt="registro de cromos">
                Cromos
            </a>
            <a href="/administrador/uploadPreguntas">
                <img src="../../../img/cloud-solid (1) 1.png" alt="registro de preguntas">
                Preguntas
            </a>
        </div>
        <div class="menuPrincipal5">
            <ul>
                <li>
                    <a class="menuUser">
                        <p class="nombreUser"><?php echo e(Auth::user()->name); ?></p>
                    </a>
                    <ul>
                        <li>
                            <div class="menuLogout">
                                <a class="menuLogout1" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    <?php echo e(__('Salir')); ?>

                                </a>

                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="">
                                    <?php echo csrf_field(); ?>
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer class="piePagina">
        <p class="informacion">
            Copyright © 2021, All Rights Reserved
        </p>
        <ul class="redesSociales">
            <li>
                <a href="https://es-la.facebook.com/utpl.loja/" target="_BLANK">
                    <img src="../../../img/facebook-brands 1.png" alt="facebook">
                </a>
            </li>
            <li>
                <a href="https://twitter.com/utpl?lang=es" target="_BLANK">
                    <img src="../../../img/Twitter 1.png" alt="twitter">
                </a>
            </li>
            <li>
                <a href="https://www.instagram.com/utpl/?hl=es-la" target="_BLANK">
                    <img src="../../../img/instagram 1.png" alt="instagram">
                </a>
            </li>
        </ul>
        <div class="utpl">
            <img src="../../../img/ba.png" alt="logo UTPL">
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views/layouts/appAdmin.blade.php ENDPATH**/ ?>