<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eventos;

class EventosController extends Controller
{
    // Listado de eventos
    public function index()
    {
        $eventos = Eventos::all();
        return view('eventos.index', compact('eventos'));
    }

    // Mostrar formulario de creación
    public function create()
    {
        return view('eventos.create');
    }

    // Guardar evento
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'municipio' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'fecha_hora_inicio' => 'required|date',
            'fecha_hora_fin' => 'required|date|after:fecha_hora_inicio',
        ]);

        Eventos::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'municipio' => $request->municipio,
            'departamento' => $request->departamento,
            'horaFecha_inicio' => $request->fecha_hora_inicio,
            'horaFecha_fin' => $request->fecha_hora_fin,
        ]);

        return redirect()->route('eventos.index')->with('success', 'Evento creado correctamente');
    }

    // Mostrar formulario de edición
    public function edit($id)
    {
        $evento = Eventos::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    // Actualizar evento
    public function update(Request $request, $id)
    {
        $evento = Eventos::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'municipio' => 'required|string|max:255',
            'departamento' => 'required|string|max:255',
            'fecha_hora_inicio' => 'required|date',
            'fecha_hora_fin' => 'required|date|after:fecha_hora_inicio',
        ]);

        $evento->update([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'municipio' => $request->municipio,
            'departamento' => $request->departamento,
            'horaFecha_inicio' => $request->fecha_hora_inicio,
            'horaFecha_fin' => $request->fecha_hora_fin,
        ]);

        return redirect()->route('eventos.index')->with('success', 'Evento actualizado correctamente');
    }

    public function show($id)
    {
        $evento = Eventos::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }


    // Eliminar evento
    public function destroy($id)
    {
        $evento = Eventos::findOrFail($id);
        $evento->delete();

        return redirect()->route('eventos.index')->with('success', 'Evento eliminado correctamente');
    }
}
