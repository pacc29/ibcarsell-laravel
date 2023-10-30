<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transmision extends Model
{
    use HasFactory;
    protected $table = 'transmision';

    public function vehiculo() {
        return $this->hasOne(Vehiculo::class, 'transmision_id');
    }

}
