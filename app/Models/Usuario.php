<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuario';
    protected $primaryKey = 'id_usuarios';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'num_telefono',
        'contraseña',
        'role'
    ];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'usuarios_id', 'id_usuarios');
    }
}
