<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletas extends Model
{
    use HasFactory;

    protected $table = 'boletas';
    protected $primaryKey = 'id_boletas';
    protected $fillable = ['precio','cantidad','localidad','evento_id'];

    public function evento()
    {
        return $this->belongsTo(Eventos::class, 'evento_id');
    }

    public function compras()
    {
        return $this->hasMany(Compras::class, 'boleta_id');
    }
}
