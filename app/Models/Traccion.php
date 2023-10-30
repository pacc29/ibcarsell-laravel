<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traccion extends Model
{
    use HasFactory;
    protected $table = 'traccion';

    public function vehiculo() {
        return $this->hasOne(Vehiculo::class, 'traccion_id');
    }

}
