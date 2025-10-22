<?php

namespace App\Http\Controllers;

use App\Models\Artista;
use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index()
    {
        $artistas = Artista::all();
        return view('artistas.index', compact('artistas'));
    }

    public function create()
    {
        return view('artistas.create');
    }

    public function store(Request $request)
    {
        Artista::create($request->all());
        return redirect()->route('artistas.index');
    }

    public function edit($id_artista)
    {
        $artista = Artista::findOrFail($id_artista);
        return view('artistas.edit', compact('artista'));
    }

    public function update(Request $request, $id_artista)
    {
        $artista = Artista::findOrFail($id_artista);
        $artista->update($request->all());
        return redirect()->route('artistas.index');
    }

    public function destroy($id_artista)
    {
        $artista = Artista::findOrFail($id_artista);
        $artista->delete();
        return redirect()->route('artistas.index');
    }
}
