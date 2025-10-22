<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
   public function store(LoginRequest $request): \Illuminate\Http\RedirectResponse
{
    $request->authenticate();
    $request->session()->regenerate();

    $user = $request->user(); // usuario logueado

    // Redirección según rol
    switch ($user->Role) {
        case 'Administrador':
            return redirect()->intended('/dashboard'); // ruta admin
        case 'Usuario':
            return redirect()->intended('/usuario/home'); // ruta usuario
        case 'Comprador':
            return redirect()->intended('/comprador/home'); // ruta comprador
        default:
            Auth::logout();
            return redirect()->route('login')->withErrors('Rol no válido');
    }
}


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
