<?php

namespace App\Http\Controllers;

use App\Models\Boletas;
use Illuminate\Http\Request;

class BoletasController extends Controller
{
    public function index()
    {
        $boletas = Boletas::all();
        return view('boletas.index', compact('boletas'));
    }

    public function create()
    {
        return view('boletas.create');
    }

    public function store(Request $request)
    {
        Boletas::create($request->all());
        return redirect()->route('boletas.index');
    }

    public function edit($id)
    {
        $boleta = Boletas::findOrFail($id);
        return view('boletas.edit', compact('boleta'));
    }

    public function update(Request $request, $id)
    {
        $boleta = Boletas::findOrFail($id);
        $boleta->update($request->all());
        return redirect()->route('boletas.index');
    }

    public function destroy($id)
    {
        $boleta = Boletas::findOrFail($id);
        $boleta->delete();
        return redirect()->route('boletas.index');
    }
}
