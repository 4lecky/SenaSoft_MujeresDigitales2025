<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    use HasFactory;

    protected $table = 'localidades';
    protected $primaryKey = 'id_localidades';
    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'estados',
        'boletas_id'
    ];
}
