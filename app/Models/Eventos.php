<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    protected $table = 'eventos';
    protected $primaryKey = 'id_eventos';
    protected $fillable = ['nombre','descripcion','horaFecha_inicio','horaFecha_fin','lugar_realizacion','boletas_id','localidades_id'];

    public function boleta(){
        return $this->belongsTo(Boletas::class,'boletas_id');
    }

    public function localidad(){
        return $this->belongsTo(Localidades::class,'localidades_id');
    }

    public function artistas(){
        return $this->belongsToMany(Artista::class,'evento_artista','evento_id','artista_id')->withTimestamps();
    }
}
