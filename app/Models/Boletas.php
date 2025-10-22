<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Boletas extends Model
{
    use HasFactory;

    protected $table = 'boletas';
    protected $primaryKey = 'id_boletas';
    public $timestamps = false;

    protected $fillable = [
        'precio',
        'cantidad',
        'valor_unitario',
        'valor_total'
    ];
}
