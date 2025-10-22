<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/usuarios.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>

<div class="sectionIzquierda">
    <h1 class="title_principal">Registrar Usuario</h1>

    <!-- Mensajes de errores -->
    @if ($errors->any())
        <div class="errors">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulario de registro -->
    <form action="{{ route('register') }}" method="POST" class="container_form">
        @csrf

                <!-- Nombre -->
                <div class="input-group">
                    <label for="name">Nombre completo</label>
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="input-field" />
                    <x-input-error :messages="$errors->get('name')" class="error" />
                </div>

                <!-- Correo -->
                <div class="input-group">
                    <label for="email">Correo electrónico</label>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" class="input-field" />
                    <x-input-error :messages="$errors->get('email')" class="error" />
                </div>

                <!-- Contraseña -->
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <x-text-input id="password" type="password" name="password" required autocomplete="new-password" class="input-field" />
                    <x-input-error :messages="$errors->get('password')" class="error" />
                </div>

                <!-- Confirmar contraseña -->
                <div class="input-group">
                    <label for="password_confirmation">Confirmar contraseña</label>
                    <x-text-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="input-field" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="error" />
                </div>

                <!-- Botones -->
                <div class="form-actions">
                    <a href="{{ route('login') }}" class="link">¿Ya tienes cuenta?</a>
                    <x-primary-button class="btn-register">
                        Registrarse
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
