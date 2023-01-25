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
    <p class="formularioTitulo">Registrar Temática</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminTematicas.store') }}" enctype="multipart/form-data">
                @csrf
                <br>
                <div class="">
                    <label for="imgTematica" class="subirImg">Subir Imagen</label>
                    <input id="imgTematica" type="file" class="cromoInput" name="imgTematica" value="{{ old('imgTematica') }}" required autocomplete="imgTematica">
                    
                </div>
                <div class="">
                    <input id="nombretematica" type="text" class="formularioInput" name="nombretematica" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('nombretematica') }}" required autocomplete="nombretematica">
                    <label for="nombretematica" class="formularioLabel">Nombre</label>
                </div>
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</label>
                    <section class="sectionOpcionesAlbum">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            @foreach($albumes as $album)
                                <option value="{{ $album -> id }}" {{ $album->id == '{$album -> id' ? 'selected' : ''}}}>
                                {{ $album -> nombreAlbum }}</option>
                            @endforeach
                        </select>
                    </section>
                </div>
                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            {{ __('Guardar') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Tématicas Registradas</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Álbum</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                @foreach($tematicas as $tematica)
                    <tr>
                        <td>{{ $tematica->id}}</td>
                        <td><img src="{{ asset('storage').'/'.$tematica->imgTematica}}" alt="tematica" width="342px" height="172px"></td>
                        <td>{{ $tematica->nombretematica}}</td>
                        <td>{{ $tematica->nombreAlbum}}</td>
                        <td><a href="{{ route('adminTematicas.edit', $tematica->id) }}" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de la temática {{ $tematica->nombretematica }}?')" class="botonEditar">
                        <img src="../../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="barraPaginacion">
            {{ $tematicas->links() }}
        </section>
    </div>
</div>
@endsection