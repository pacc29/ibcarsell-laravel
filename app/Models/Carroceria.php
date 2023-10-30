<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carroceria extends Model
{
    use HasFactory;
    protected $table = 'carroceria';

    public function vehiculo()
    {
        return $this->hasOne(Vehiculo::class, 'carroceria_id');
    }
}
