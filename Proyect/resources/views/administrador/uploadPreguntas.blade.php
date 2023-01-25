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
    <p class="formularioTitulo">Registrar Pregunta</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadPreguntas.store') }}">
                @csrf
                <br>
                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('descripcion') }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Pregunta</label>
                </div>

                <div class="">
                    <input id="respuestaCorrecta" type="text" class="formularioInput" name="respuestaCorrecta" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('respuestaCorrecta') }}" required autocomplete="respuestaCorrecta">
                    <label for="respuestaCorrecta" class="formularioLabel">Respuesta</label>
                </div>

                <div class="">
                    <input id="respuestaError1" type="text" class="formularioInput" name="respuestaError1" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('respuestaError1') }}" required autocomplete="respuestaError1">
                    <label for="respuestaError1" class="formularioLabel">Respuesta Error 1</label>
                </div>
                <div class="">
                    <input id="respuestaError2" type="text" class="formularioInput" name="respuestaError2" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('respuestaError2') }}" required autocomplete="respuestaError2">
                    <label for="respuestaError2" class="formularioLabel">Respuesta Error 2</label>
                </div>
                <div class="">
                    <input id="respuestaError3" type="text" class="formularioInput" name="respuestaError3" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('respuestaError3') }}" required autocomplete="respuestaError3">
                    <label for="respuestaError3" class="formularioLabel">Respuesta Error 3</label>
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
                            {{ __('Agregar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Registro de Preguntas</p>
    <div class="tablaVisualizacionPreguntas">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Pregunta</th>
                    <th>Respuesta</th>
                    <th>Temática</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                @foreach($preguntas as $pregunta)
                    <tr>
                        <td>{{ $pregunta->id}}</td>
                        <td>{{ $pregunta->descripcion}}</td>
                        <td>{{ $pregunta->respuestaCorrecta}}</td>
                        <td>{{ $pregunta->nombretematica}}</td>
                        @method('DELETE')
                        <td><a href="{{ route('uploadPreguntas.destroy', $pregunta->id) }}" 
                        onclick="return confirm('¿Seguro que deseas eliminar la pregunta {{ $pregunta->id}}?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="{{ route('uploadPreguntas.edit', $pregunta->id) }}" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de la pregunta {{ $pregunta->id}}?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="barraPaginacion">
            {{ $preguntas->links() }}
        </section>
    </div>
</div>
@endsection