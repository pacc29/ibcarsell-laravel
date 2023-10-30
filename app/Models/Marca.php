<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    protected $table = 'marcas';

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class, 'marca_id', 'id');
    }

    // Falta probar
    public function modelo()
    {
        return $this->hasMany(Modelo::class, 'marca_id', 'id');
    }
}
