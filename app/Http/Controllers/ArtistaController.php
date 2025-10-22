<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use App\Models\Eventos;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index(){
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    public function create(){
        return view('artistas.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'genero_musical'=>'required|string|max:100',
            'ciudad_origen'=>'required|string|max:100'
        ]);
        Artista::create($request->all());
        return redirect()->route('artistas.index')->with('success','Artista creado');
    }

    public function edit(Artista $artista){
        return view('artistas.edit', compact('artista'));
    }

    public function update(Request $request, Artista $artista){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'apellido'=>'required|string|max:100',
            'genero_musical'=>'required|string|max:100',
            'ciudad_origen'=>'required|string|max:100'
        ]);
        $artista->update($request->all());
        return redirect()->route('artistas.index')->with('success','Artista actualizado');
    }

    public function destroy(Artista $artista){
        $artista->delete();
        return redirect()->route('artistas.index')->with('success','Artista eliminado');
    }

    // Asociar a evento
    public function asociarEvento(Request $request, Artista $artista, Eventos $evento){
        // Validar que el artista no tenga evento en el mismo horario
        foreach($artista->eventos as $e){
            if(!($evento->horaFecha_fin < $e->horaFecha_inicio || $evento->horaFecha_inicio > $e->horaFecha_fin)){
                return back()->with('error','El artista ya tiene un evento en ese horario');
            }
        }
        $artista->eventos()->attach($evento->id_eventos);
        return back()->with('success','Artista asociado al evento');
    }
}
