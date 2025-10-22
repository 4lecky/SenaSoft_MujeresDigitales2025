<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = 'artistas';
    protected $primaryKey = 'id_artista';
    protected $fillable = ['nombre','apellido','genero_musical','ciudad_origen'];

    public function eventos(){
        return $this->belongsToMany(Evento::class,'evento_artista','artista_id','evento_id')->withTimestamps();
    }
}
