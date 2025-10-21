<?php

namespace App\Http\Controllers;

use App\Models\Localidades;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function index()
    {
        $localidades = Localidades::all();
        return view('localidades.index', compact('localidades'));
    }

    public function create()
    {
        return view('localidades.create');
    }

    public function store(Request $request)
    {
        Localidades::create($request->all());
        return redirect()->route('localidades.index');
    }

    public function edit($id_localidades)
    {
        $localidad = Localidades::findOrFail($id_localidades);
        return view('localidades.edit', compact('localidad'));
    }

    public function update(Request $request, $id_localidades)
    {
        $localidad = Localidades::findOrFail($id_localidades);
        $localidad->update($request->all());
        return redirect()->route('localidades.index');
    }

    public function destroy($id_localidades)
    {
        $localidad = Localidades::findOrFail($id_localidades);
        $localidad->delete();
        return redirect()->route('localidades.index');
    }
}
