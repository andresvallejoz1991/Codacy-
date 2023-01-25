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

    <p class="formularioTitulo">Registrar Usuario</p>
    <div class="">
        <div class="">
            <form class="formulario" method="POST" action="{{ route('adminUsers.store') }}">
                @csrf
                <br>
                <div class="">
                    <input id="name" type="text" class="formularioInput" name="name" value="{{ old('name') }}" required autocomplete="name">
                    <label for="name" class="formularioLabel">Nombre</label>
                </div>

                <div class="">
                    <input id="email" type="email" class="formularioInput" name="email" value="{{ old('email') }}" required autocomplete="email">
                    <label for="email" class="formularioLabel">Correo</label>
                </div>

                <div class="">
                    <input id="password" type="password" class="formularioInput" name="password" required autocomplete="new-password">
                    <label for="password" class="formularioLabel">Contraseña</label>
                </div>

                <div class="">
                    <input id="password-confirm" type="password" class="formularioInput" name="password_confirmation" required autocomplete="new-password">
                    <label for="password-confirm" class="formularioLabel">Confirmar Contraseña</label>
                </div>

                <div class="">
                    <label for="rol" class="labelSelect">Rol</label>
                    <section class="sectionOpciones">
                        <select name="rol" id="rol" class="selectFormulario">
                            <option value="">Selecciona un Rol..</option>
                            <option value="usuario" {{ old('rol') == 'usuario' ? 'selected' : ''}}>usuario</option>
                            <option value="administrador" {{ old('rol') == 'administrador' ? 'selected' : ''}}>administrador</option>
                        </select>
                    </section>
                </div>

                <div class="">
                    <div class="">
                        <button type="submit" class="formularioSubmit">
                            Registrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/form.js"></script>
</section>
<div class="tablaDatos">
    <p class="tablaTitulo">Datos de Usuario</p>
    <div class="tablaVisualizacion">
        <table>
            <thead class="tablaEncabezado">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>{{ __('Email') }}</th>
                    <th>{{ __('Rol') }}</th>
                    <th>Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody class="tablaCuerpo">
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->id}}</td>
                        <td>{{ $usuario->name}}</td>
                        <td>{{ $usuario->email}}</td>
                        <td>{{ $usuario->rol}}</td>
                        @method('DELETE')
                        <td><a href="{{ route('adminUsers.destroy', $usuario->id) }}" 
                        onclick="return confirm('¿Seguro que deseas eliminar a {{ $usuario->name}}?')" class="botonEliminar">
                        <img src="../../img/trash-alt-regular 1.png" alt="boton eliminar"></a></td>
                        <td><a href="{{ route('adminUsers.edit', $usuario->id) }}" 
                        onclick="return confirm('¿Seguro que deseas editar los datos de {{ $usuario->name}}?')" class="botonEditar">
                        <img src="../../img/edit-solid 1.png" alt="boton editar"></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <section class="barraPaginacion">
            {{ $usuarios->links() }}
        </section>
    </div>
</div>
@endsection