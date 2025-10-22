<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $table = 'artista';
    protected $primaryKey = 'id_artista';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'genero_musical',
        'ciudad_origen',
        'eventos_id'
    ];
}
