<?php

namespace App\Http\Controllers;

use App\Models\Boletas;
use App\Models\Eventos;
use Illuminate\Http\Request;

class BoletasController extends Controller
{
    public function index(){
        $boletas = Boletas::all();
        return view('boletas.index', compact('boletas'));
    }

    public function create(){
        $eventos = Eventos::all();
        return view('boletas.create', compact('eventos'));
    }

    public function store(Request $request){
        $request->validate([
            'precio'=>'required|numeric',
            'cantidad'=>'required|integer|min:1',
            'localidad'=>'nullable|string|max:100',
        ]);

        Boletas::create($request->all());
        return redirect()->route('boletas.index')->with('success','Boleta creada');
    }

    public function edit(Boletas $boleta){
        $eventos = Eventos::all();
        return view('boletas.edit', compact('boleta','eventos'));
    }

    public function update(Request $request, Boleta $boleta){
        $request->validate([
            'precio'=>'required|numeric',
            'cantidad'=>'required|integer|min:1',
            'localidad'=>'nullable|string|max:100',
        ]);

        $boleta->update($request->all());
        return redirect()->route('boletas.index')->with('success','Boleta actualizada');
    }

    public function destroy(Boletas $boleta){
        $boleta->delete();
        return redirect()->route('boletas.index')->with('success','Boleta eliminada');
    }
}

