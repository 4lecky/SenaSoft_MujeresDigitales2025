<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index()
    {
        $eventos = Eventos::all();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        Eventos::create($request->all());
        return redirect()->route('eventos.index');
    }

    public function edit($id_eventos)
    {
        $evento = Eventos::findOrFail($id_eventos);
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, $id_eventos)
    {
        $evento = Eventos::findOrFail($id_eventos);
        $evento->update($request->all());
        return redirect()->route('eventos.index');
    }

    public function destroy($id_eventos)
    {
        $evento = Eventos::findOrFail($id_eventos);
        $evento->delete();
        return redirect()->route('eventos.index');
    }
}

// Comentario para que se envien los cambios