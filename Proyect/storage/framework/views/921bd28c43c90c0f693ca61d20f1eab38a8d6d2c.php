<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CroNomía</title>
    <link rel="stylesheet" href="../../css/estilos.css">
</head>
<body>
    <header class="encabezado">
        <img src="../../img/money-stack 1.png" alt="">
        <h1>CroNomía</h1>
        <h2>La Economía Basada en Cromos</h2>
    </header>
    <nav class="menuPrincipal">
        <a href="<?php echo e(route('home')); ?>" class="menu1">
            <img src="../../img/casa 1.png" alt="">
            Inicio
        </a>
        <a href="<?php echo e(route('juego')); ?>" class="menu1">
            <img src="../../img/controlador-de-gamepad 1.png" alt="">
            Juego
        </a>
        <a href="<?php echo e(route('album')); ?>" class="menu1">
            <img src="../../img/album-de-fotos (1) 1.png" alt="">
            Album
        </a>
        <a href="intercambio" class="menu1">
            <img src="../../img/intercambiar 1.png" alt="">
            Intercambio
        </a>
        <?php if(auth()->guard()->guest()): ?>
            <?php if(Route::has('login')): ?>
                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
            <?php endif; ?>    
            <?php if(Route::has('register')): ?>
                <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
            <?php endif; ?>
        <?php else: ?>
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <?php echo e(Auth::user()->name); ?>

            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    <?php echo e(__('Logout')); ?>

                </a>

                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            </div>
        <?php endif; ?>
    </nav>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <footer class="piePagina">
        <p class="informacion">
            Copyright © 2020, All Rigthts Reserved
        </p>
        <ul class="redesSociales">
            <li>
                <img src="../../img/facebook-brands 1.png" alt="">
            </li>
            <li>
                <img src="../../img/Twitter 1.png" alt="">
            </li>
            <li>
                <img src="../../img/instagram 1.png" alt="">
            </li>
        </ul>
        <div class="utpl">
            <p class="colorUtpl">UTPL</p>
            <p class="descripcionUtpl">Decide ser más</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Proyect\resources\views/layouts/app.blade.php ENDPATH**/ ?>