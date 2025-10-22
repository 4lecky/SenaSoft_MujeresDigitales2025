<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    protected $table = 'compras';
    protected $primaryKey = 'id_compras';
    protected $fillable = ['usuarios_id','evento_id','boleta_id','cantidad','valor_total','metodo_pago','estado'];

    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuarios_id');
    }

    public function evento(){
        return $this->belongsTo(Eventos::class,'evento_id');
    }

    public function boleta(){
        return $this->belongsTo(Boletas::class,'boleta_id');
    }
}
