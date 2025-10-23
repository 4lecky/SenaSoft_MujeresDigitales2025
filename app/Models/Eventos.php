<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;

    protected $table = 'eventos';
    protected $primaryKey = 'id_eventos';

    protected $fillable = [
        'nombre',
        'descripcion',
        'horaFecha_inicio',
        'horaFecha_fin',
        'municipio',
        'departamento',
        'latitud',
        'longitud',
    ];
}
