<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable
{
    use Notifiable;

    protected $table = 'usuarios';
    protected $primaryKey = 'id_usuarios';
    protected $fillable = ['nombre','apellido','tipo_documento','numero_documento','correo','telefono','password','Role'];
    protected $hidden = ['password'];

    public function compras(){
        return $this->hasMany(Compra::class, 'usuarios_id');
    }
}
