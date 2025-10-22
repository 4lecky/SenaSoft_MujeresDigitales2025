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

    
    public function localidad()
    {
        return $this->belongsTo(Localidad::class, 'localides_id', 'id_localidades');
    }

    public function boleta()
    {
        return $this->belongsTo(Boleta::class, 'boletas_id', 'id_boletas');
    }

    public function artistas()
    {
        return $this->hasMany(Artista::class, 'eventos_id', 'id_eventos');
    }
}

