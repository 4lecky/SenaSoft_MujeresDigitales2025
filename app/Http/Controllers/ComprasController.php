<?php

namespace App\Http\Controllers;

use App\Models\Boletas;
use App\Models\Compras;
use Illuminate\Http\Request;

class ComprasController extends Controller
{
    public function comprar(Request $request, Boleta $boleta){
        $request->validate([
            'cantidad'=>'required|integer|min:1|max:10',
            'metodo_pago'=>'required|in:Tarjeta de credito,Tarjeta debito,PSE'
        ]);

        if($request->cantidad > $boleta->cantidad){
            return back()->with('error','Cantidad insuficiente de boletas');
        }

        $compra = Compras::create([
            'usuario_id'=>auth()->id(),
            'evento_id'=>$boleta->evento_id,
            'boleta_id'=>$boleta->id,
            'cantidad'=>$request->cantidad,
            'valor_total'=>$boleta->precio*$request->cantidad,
            'metodo_pago'=>$request->metodo_pago,
            'estado'=>'exitosa'
        ]);

        $boleta->cantidad -= $request->cantidad;
        $boleta->save();

        return redirect()->route('compras.historial')->with('success','Compra realizada');
    }

    public function historial(){
        $compras = auth()->user()->compras()->with('evento','boleta')->get();
        return view('compras.historial', compact('compras'));
    }
}
