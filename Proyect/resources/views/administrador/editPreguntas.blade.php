@extends('layouts.appAdmin')

@section('content')
<section class="contenidoAdmin">
    @if ($errors->any())
        <ul class="alertaUl">
            <section class="alerta">
                @foreach($errors->all() as $error)
                    <li class="alertaLi">{{ $error }}</li>
                @endforeach
            </section>
        </ul>
    @endif
    @if ($message = Session::get('mensaje'))
        <ul class="alertaUlCorrecto">
            <section class="alertaCorrecto">
                <p>{{ $message }}</p>
            </section>
        </ul>
    @endif
    <p class="formularioTitulo">Editar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadPreguntas.update', $uploadPregunta->id) }}">
                @csrf
                @method('PUT')
                <br>
                <div class="">
                    <input id="descripcion" type="text" class="formularioInputDos" name="descripcion" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $uploadPregunta->descripcion }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabelDos">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuestaCorrecta" type="text" class="formularioInputDos" name="respuestaCorrecta" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $uploadPregunta->respuestaCorrecta }}" required autocomplete="respuestaCorrecta">
                    <label for="respuestaCorrecta" class="formularioLabelDos">Respuesta</label>
                </div>

                <div class="">
                    <input id="respuestaError1" type="text" class="formularioInputDos" name="respuestaError1" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $uploadPregunta->respuestaError1 }}" required autocomplete="respuestaError1">
                    <label for="respuestaError1" class="formularioLabelDos">Respuesta Error 1</label>
                </div>
                <div class="">
                    <input id="respuestaError2" type="text" class="formularioInputDos" name="respuestaError2" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $uploadPregunta->respuestaError2 }}" required autocomplete="respuestaError2">
                    <label for="respuestaError2" class="formularioLabelDos">Respuesta Error 2</label>
                </div>
                <div class="">
                    <input id="respuestaError3" type="text" class="formularioInputDos" name="respuestaError3" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $uploadPregunta->respuestaError3 }}" required autocomplete="respuestaError3">
                    <label for="respuestaError3" class="formularioLabelDos">Respuesta Error 3</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpcionesTematica">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona una Temática..</option>
                            @foreach($tematicas as $tematica)
                                <option value="{{ $tematica -> id }}" {{ $tematica->id == '{$tematica -> id' ? 'selected' : ''}}>
                                {{ $tematica -> nombretematica }}</option>
                            @endforeach
                        </select>
                    </section>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Editar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
@endsection