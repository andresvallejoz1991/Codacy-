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
    <p class="formularioTituloEdit">Editar Temática {{ $tematica->nombretematica }}</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminTematicas.update', $tematica->id) }}" enctype="multipart/form-data">
                @csrf
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <br>
                <div class="">
                    <label for="imgTematica" class="subirImg">
                        Editar Imagen (No requerido)
                    </label>
                    <input id="imgTematica" type="file" class="cromoInput" name="imgTematica" value="{{ $tematica->imgTematica }}">
                </div>
                <div class="">
                    <input id="nombretematica" type="text" class="formularioInputDos" name="nombretematica" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ $tematica->nombretematica }}" required autocomplete="nombretematica">
                    <label for="nombretematica" class="formularioLabelDos">Nombre</label>
                </div>
                <div class="">
                    <label for="id_album" class="labelSelect">Álbum</p></label>
                    <section class="sectionOpcionesAlbum">
                        <select name="id_album" id="id_album" class="selectFormulario">
                            <option value="">Selecciona un Álbum..</option>
                            @foreach($albumes as $album)
                                <option value="{{ $album -> id }}" {{ $album->id == '{$album -> id' ? 'selected' : ''}}>
                                {{ $album -> nombreAlbum }}</option>
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