<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compras extends Model
{
    use HasFactory;

    protected $table = 'compras';
    protected $primaryKey = 'id_compras';
    public $timestamps = false;

    protected $fillable = [
        'metodo_pago',
        'usuarios_id',
        'boletas_id',
        'eventos_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuarios_id', 'id_usuarios');
    }

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'eventos_id', 'id_eventos');
    }

    public function boleta()
    {
        return $this->belongsTo(Boletas::class, 'boletas_id', 'id_boletas');
    }
}
