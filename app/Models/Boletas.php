<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Boletas extends Model
{
    protected $table = 'boletas';
    protected $primaryKey = 'id_boletas';
    protected $fillable = ['precio','cantidad','localidad'];

    public function evento(){
        return $this->belongsTo(Eventos::class,'evento_id');
    }
}
