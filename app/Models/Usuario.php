<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuarios';
    protected $fillable = [
        'nombre','apellido','tipo_documento','numero_documento','correo','telefono','password','role'
    ];
    protected $hidden = ['password'];

    public function compras()
    {
        return $this->hasMany(Compra::class, 'usuario_id', 'id_usuarios');
    }
}
