<?php

namespace App\Http\Controllers;

use App\Models\Localidades;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function index(){
        $localidades = Localidades::all();
        return view('localidades.index', compact('localidades'));
    }

    public function create(){
        return view('localidades.create');
    }

    public function store(Request $request){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'estados'=>'nullable|in:VIP,General,Preferencial'
        ]);
        Localidades::create($request->all());
        return redirect()->route('localidades.index')->with('success','Localidad creada');
    }

    public function edit(Localidades $localidad){
        return view('localidades.edit', compact('localidad'));
    }

    public function update(Request $request, Localidad $localidad){
        $request->validate([
            'nombre'=>'required|string|max:100',
            'estados'=>'nullable|in:VIP,General,Preferencial'
        ]);
        $localidad->update($request->all());
        return redirect()->route('localidades.index')->with('success','Localidad actualizada');
    }

    public function destroy(Localidades $localidad){
        $localidad->delete();
        return redirect()->route('localidades.index')->with('success','Localidad eliminada');
    }
}
