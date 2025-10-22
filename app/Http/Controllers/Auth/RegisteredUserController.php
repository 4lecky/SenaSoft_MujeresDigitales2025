<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class RegisteredUserController extends Controller
{
    /**
     * Mostrar la vista de registro.
     */
    public function create()
    {
        return view('auth.register'); // tu vista de registro
    }

    /**
     * Procesar el registro de un nuevo usuario.
     */
    public function store(Request $request)
    {
        // Validar los datos
        $request->validate([
            'nombre' => 'required|string|max:50',
            'apellido' => 'required|string|max:50',
            'tipo_documento' => 'required|string|max:20',
            'numero_documento' => 'required|string|max:20|unique:users,numero_documento',
            'email' => 'required|string|email|max:255|unique:users,email',
            'telefono' => 'nullable|string|max:20',
            'password' => ['required', 'confirmed', Password::defaults()],
            'role' => 'required|in:Administrador,Usuario,Comprador',
        ]);

        // Crear usuario
        $user = User::create([
            'nombre' => $request->nombre,
            'apellido' => $request->apellido,
            'tipo_documento' => $request->tipo_documento,
            'numero_documento' => $request->numero_documento,
            'email' => $request->email,
            'telefono' => $request->telefono,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        // Disparar evento de registro (para verificación de email si está habilitada)
        event(new Registered($user));

        // Loguear automáticamente al usuario
        auth()->login($user);

        // Redireccionar según rol
        return redirect($this->redirectTo($user));
    }

    /**
     * Determinar la ruta de redirección según el rol.
     */
    protected function redirectTo(User $user)
    {
        return match($user->role) {
            'Administrador' => route('dashboard.admin'),
            'Comprador' => route('dashboard.comprador'),
            'Usuario' => route('dashboard.usuario'),
            default => route('dashboard'),
        };
    }
}
