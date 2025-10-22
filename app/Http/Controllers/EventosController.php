<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use App\Models\Boletas;
use App\Models\Localidades;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    public function index(){
        $eventos = Eventos::all();
        return view('eventos.index', compact('eventos'));
    }

    public function create(){
        $boletas = Boletas::all();
        $localidades = Localidades::all();
        return view('eventos.create', compact('boletas','localidades'));
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'descripcion'=>'nullable|string|max:255',
            'fecha_hora_inicio'=>'required|date',
            'fecha_hora_fin'=>'required|date|after_or_equal:fecha_hora_inicio',
            'lugar_realizacion'=>'nullable|string|max:100',
            'boletas_id'=>'nullable|exists:boletas,id',
            'localidades_id'=>'nullable|exists:localidades,id'
        ]);

        Eventos::create($request->all());
        return redirect()->route('eventos.index')->with('success','Evento creado');
    }

    public function edit(Evento $evento){
        $boletas = Boletas::all();
        $localidades = Localidades::all();
        return view('eventos.edit', compact('evento','boletas','localidades'));
    }

    public function update(Request $request, Eventos $evento){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'descripcion'=>'nullable|string|max:255',
            'horaFecha_inicio'=>'required|date',
            'horaFecha_fin'=>'required|date|after_or_equal:horaFecha_inicio',
            'lugar_realizacion'=>'nullable|string|max:100',
            'boletas_id'=>'nullable|exists:boletas,id',
            'localidades_id'=>'nullable|exists:localidades,id'
        ]);

        $evento->update($request->all());
        return redirect()->route('eventos.index')->with('success','Evento actualizado');
    }

    public function destroy(Eventos $evento){
        $evento->delete();
        return redirect()->route('eventos.index')->with('success','Evento eliminado');
    }

    // Consulta pública
    public function disponibles(Request $request){
        $eventos = Eventos::query();
        if($request->fecha) $eventos->whereDate('horaFecha_inicio', $request->fecha);
        if($request->municipio) $eventos->where('lugar_realizacion','like',"%{$request->municipio}%");
        $eventos = $eventos->get();
        return view('eventos.disponibles', compact('eventos'));
    }
}


// Comentario para que se envien los cambios