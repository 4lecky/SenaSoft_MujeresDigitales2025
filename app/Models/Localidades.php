<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model
{
    protected $table = 'localidades';
    protected $primaryKey = 'id_localidades';
    protected $fillable = ['nombre','estados','boletas_id'];
}
