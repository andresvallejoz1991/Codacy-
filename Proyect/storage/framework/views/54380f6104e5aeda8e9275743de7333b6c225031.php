

<?php $__env->startSection('content'); ?>
<section class="contenedor">
	<section class="grid" id="grid">
		<?php $__currentLoopData = $albumes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $album): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<p class="nombreAlbumCromos"><?php echo e($album -> nombreAlbum); ?></p>
			<?php $__currentLoopData = $croms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $crom): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item" data-descripcion= "<?php echo e($crom->descripcion); ?>" data-titulo="<?php echo e($crom->nombreCromo); ?>">
					<article class="item-contenido">
						<img src="<?php echo e(asset('storage').'/'.$crom->imgCromo); ?>" alt="cromo" width="200px" height="200px">
					</article>
				</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</section>
	
	<section class="barraPaginacion">
		<?php echo e($croms->links()); ?>

	</section>

	<section class="overlay" id="overlay">
		<div class="contenedor-img">
			<button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
			<p class="titulo"></p>
			<img src="" alt="contenedor">
		</div>
		<p class="descripcion"></p>
	</section>
		
</section>


<script src="../../js/main.js"></script> 

<script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
<script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\laravel\ProyectoCromos\Proyect\resources\views//usuario/album.blade.php ENDPATH**/ ?>