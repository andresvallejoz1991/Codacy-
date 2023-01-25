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
    <p class="formularioTitulo">Cargar Cromo</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('uploadCromos.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="">
                    <label for="imgCromo" class="subirImg">Subir Imagen</label>
                    <input id="imgCromo" type="file" class="cromoInput" name="imgCromo" value="{{ old('imgCromo') }}" required autocomplete="imgCromo">
                    
                </div>

                <div class="">
                    <input id="nombreCromo" type="text" class="formularioInput" name="nombreCromo" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('nombreCromo') }}" required autocomplete="nombreCromo">
                    <label for="nombreCromo" class="formularioLabel">Nombre del Cromo</label>
                </div>

                <div class="">
                    <input id="descripcion" type="text" class="formularioInput" name="descripcion" value="{{ old('descripcion') }}" required autocomplete="descripcion">
                    <label for="descripcion" class="formularioLabel">Descripción</label>
                </div>

                <div class="">
                    <label for="id_tematica" class="labelSelect">Temática</label>
                    <section class="sectionOpcionesTematica">
                        <select name="id_tematica" id="id_tematica" class="selectFormulario">
                            <option value="">Selecciona una Temática..</option>
                            @foreach($tematicas as $tematica)
                                $tematic = {{ $tematica->nombretematica}}
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
    <p class="tablaTitulo">Registro de Cromos</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Imagen</th>
                    <th>Temática</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                @foreach($cromos as $cromo)
                    <tr>
                        <td>{{ $cromo->id}}</td>
                        <td>{{ $cromo->nombreCromo}}</td>
                        <td><img src="{{ asset('storage').'/'.$cromo->imgCromo}}" alt="cromo" width="200px" height="200px"></td>
                        <td>{{ $cromo->nombretematica}}</td>
                        @method('DELETE')
                        <td><a href="{{ route('uploadCromos.destroy', $cromo->id) }}" 
                        onclick="return confirm('¿Seguro que deseas eliminar el cromo {{ $cromo->nombreCromo}}?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="{{ route('uploadCromos.edit', $cromo->id) }}" 
                        onclick="return confirm('¿Seguro que deseas editar los datos del cromo {{ $cromo->nombreCromo}}?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="barraPaginacion">
            {{ $cromos->links() }}
        </section>
    </div>
</div>
@endsection