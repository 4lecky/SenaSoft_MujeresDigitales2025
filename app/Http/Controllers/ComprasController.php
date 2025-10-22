<?php

namespace App\Http\Controllers;

use App\Models\Compras;
use App\Models\Eventos;
use App\Models\Boletas;
use App\Models\Usuario;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    // Mostrar historial de compras por usuario
    public function historial($id_usuario)
    {
        $usuario = Usuario::with(['compras.evento', 'compras.boleta'])->findOrFail($id_usuario);
        $compras = $usuario->compras;

        return view('compras.historial', compact('usuario', 'compras'));
    }

    // Registrar una nueva compra (ejemplo)
    public function create()
    {
        $usuarios = Usuario::all();
        $eventos = Eventos::all();
        $boletas = Boletas::all();

        return view('compras.create', compact('usuarios', 'eventos', 'boletas'));
    }

    public function store(Request $request)
    {
        Compras::create($request->all());
        return redirect()->route('compras.historial', $request->usuarios_id);
    }
}
