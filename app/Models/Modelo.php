<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    use HasFactory;
    protected $table = 'modelos';

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class, 'modelo_id');
    }

    // Falta probar
    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id', 'id');
    }
}
