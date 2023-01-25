@extends('layouts.appInicio')

@section('content')
<div class="ventanaLogeo">
    <div class="div1">
        <div class="div2">
            <img src="../../img/iniciar-sesion 1.png" alt="iniciar Sesion">
            Iniciar Sesión
        </div>

        <div class="">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="div3">
                    <label for="email" class="labelInicio">{{ __('Usuario') }}</label>

                    <div class="div4">
                        <input id="email" type="email" class="inputInicio" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su usuario">
                        <br>
                        @error('email')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="div3">
                    <label for="password" class="labelInicio">{{ __('Contraseña') }}</label>

                    <div class="div4">
                        <input id="password" type="password" class="inputInicio" name="password" required autocomplete="current-password" placeholder="Ingrese su clave">
                        <br>
                        @error('password')
                            <span class="" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="">
                    <div class="">
                        <div class="div5">
                            <input class="" type="checkbox" name="remember" id="remember" value="{{ old('remember') ? 'checked' : '' }}">

                            <label class="" for="remember">
                                {{ __('Recordar Contraseña') }}
                            </label>
                        </div>
                    </div>
                </div>

                <div class="">
                    <div class="div6">
                        <button type="submit" class="">
                            {{ __('Iniciar') }}
                        </button>

                        <!--
                            @if (Route::has('password.request'))
                                <a class="" href="{{ route('password.request') }}">
                                    {{ __('Olvido su Contraseña?') }}
                                </a>
                            @endif
                        -->
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
