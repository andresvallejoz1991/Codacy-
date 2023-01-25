

<?php $__env->startSection('content'); ?>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <!-- start Quiz button -->
  <div class="start_btn"><button>Comenzar</button></div>

<!-- Info Box -->
<div class="info_box">
    <div class="info-title"><span>Reglas del Quiz</span></div>
    <div class="info-list">
        <div class="info">1. Solo Tendrás <span>15 segundos</span> por pregunta.</div>
        <div class="info">2. Una vez que selecciones tu respuesta, no se podrá deshacer.</div>
        <div class="info">3. No se puede seleccionar ninguna opción una vez que pasa el tiempo.</div>
        <div class="info">4. No puedes salir de la prueba mientras juegas.</div>
        <div class="info">5. Obtendrá puntos según sus respuestas correctas.</div>
    </div>
    <div class="buttons">
        <button class="quit">Salir</button>
        <button class="restart">Continuar</button>
    </div>
</div>

<!-- Quiz Box -->
<div class="quiz_box">
    <header>
        <div class="title">Cuestionario</div>
        <div class="timer">
            <div class="time_left_txt">Tiempo</div>
            <div class="timer_sec">15</div>
        </div>
        <div class="time_line"></div>
    </header>
    <section class="query">
        <div class="que_text">
            <!-- Here I've inserted question from JavaScript -->
        </div>
        <div class="option_list">
            <!-- Here I've inserted options from JavaScript -->
        </div>
    </section>

    <!-- footer of Quiz Box -->
    <footer>
        <div class="total_que">
            <!-- Here I've inserted Question Count Number from JavaScript -->
        </div>
        <button class="next_btn">Siguiente</button>
    </footer>
</div>

<!-- Result Box -->
<div class="result_box">
    <div class="icon">
        <i class="fas fa-crown"></i>
    </div>
    <div class="complete_text">Haz completado el Quiz!</div>
    <div class="score_text">
        <!-- Here I've inserted Score Result from JavaScript -->
    </div>
    <div class="buttons">
        <button class="restart">Repetir</button>
        <button class="quit">Salir</button>
    </div>
</div>

<!-- Inside this JavaScript file I've inserted Questions and Options only -->
<script src="../../js/form1.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.appNavegando', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\aplicaciones\proyectoIntegrador\laravel\Nueva carpeta\ProyectoCromos\Proyect\resources\views/quiz.blade.php ENDPATH**/ ?>