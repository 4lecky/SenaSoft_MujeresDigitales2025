<x-guest-layout>
    <link rel="stylesheet" href="{{ asset('css/eventos.css') }}">

    <div class="login-container">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>

            <!-- Estado de sesión -->
            <x-auth-session-status class="status" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email -->
                <div class="input-group">
                    <label for="email">Correo electrónico</label>
                    <x-text-input id="email" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" class="input-field"/>
                    <x-input-error :messages="$errors->get('email')" class="error" />
                </div>

                <!-- Contraseña -->
                <div class="input-group">
                    <label for="password">Contraseña</label>
                    <x-text-input id="password" type="password" name="password" required autocomplete="current-password" class="input-field"/>
                    <x-input-error :messages="$errors->get('password')" class="error" />
                </div>

                <!-- Recordarme -->
                <div class="options">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        Recordarme
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">¿Olvidaste tu contraseña?</a>
                    @endif
                </div>

                <!-- Botón -->
                <x-primary-button class="btn-login">
                    Ingresar
                </x-primary-button>
            </form>

            <p class="register-text">
                ¿No tienes cuenta?
                <a href="{{ route('register') }}">Regístrate aquí</a>
            </p>
        </div>
    </div>
</x-guest-layout>
