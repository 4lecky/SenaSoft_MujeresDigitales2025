<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $primaryKey = 'id_eventos';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'descripcion',
        'lugar_realizacion',
        'horaFecha_inicio',
        'horaFecha_fin',
        'boletas_id',
        'localides_id'
    ];
}
