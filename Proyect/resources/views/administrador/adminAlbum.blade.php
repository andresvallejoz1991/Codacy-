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
    <p class="formularioTitulo">Registrar Álbum</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminAlbum.store') }}">
                @csrf
                <br>
                <div class="">
                    <input id="nombreAlbum" type="text" class="formularioInput" name="nombreAlbum" 
                    onKeyUp="document.getElementById(this.id).value=document.getElementById(this.id).value.toLowerCase()"
                    value="{{ old('nombreAlbum') }}" required autocomplete="nombreAlbum">
                    <label for="nombreAlbum" class="formularioLabel">Nombre</label>
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
    <p class="tablaTitulo">Álbumes Registrados</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                @foreach($albumes as $album)
                    <tr>
                        <td>{{ $album->id}}</td>
                        <td>{{ $album->nombreAlbum}}</td>
                        <td><a href="{{ route('adminAlbum.edit', $album->id) }}" 
                        onclick="return confirm('¿Seguro que deseas editar los datos del álbum {{ $album->nombreAlbum }}?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="barraPaginacion">
            {{ $albumes->links() }}
        </section>
    </div>
</div>
@endsection