<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;

class Vehiculo extends Model
{
    use HasFactory;
    protected $table = 'vehiculo';
    protected $fillable = [
        'placa',
        'descripcion',
        'cilindros',
        'cilindrada',
        'puertas',
        'precio',
        'kilometraje',
        'fecha_fabricacion',
        'fecha_modelo',
        'marca_id',
        'modelo_id',
        'carroceria_id',
        'transmision_id',
        'combustible_id',
        'traccion_id',
        'condicion_id',
        'ubicacion_id',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class, 'marca_id');
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::class, 'modelo_id');
    }

    public function carroceria()
    {
        return $this->belongsTo(Carroceria::class, 'carroceria_id');
    }

    public function combustible()
    {
        return $this->belongsTo(Combustible::class, 'combustible_id');
    }

    public function condicion()
    {
        return $this->belongsTo(Condicion::class, 'condicion_id');
    }

    public function traccion()
    {
        return $this->belongsTo(Traccion::class, 'traccion_id');
    }

    public function transmision()
    {
        return $this->belongsTo(Transmision::class, 'transmision_id');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'ubicacion_id');
    }

    public static function vehiculosRecientes($number)
    {
        return Vehiculo::take($number)->latest()->get();
    }

    public static function scopeSearch($query, $atributos)
    {
        $condicion = $atributos['condicion'];
        $marca = $atributos['marca'];
        $modelo = $atributos['modelo'];
        $carroceria = $atributos['carroceria'];
        $transmision = $atributos['transmision'];
        $combustible = $atributos['combustible'];
        $traccion = $atributos['traccion'];
        $ubicacion = $atributos['ubicacion'];
        $minYear = $atributos['minYear'];
        $maxYear = $atributos['maxYear'];
        $minKilometraje = $atributos['minKilometraje'];
        $maxKilometraje = $atributos['maxKilometraje'];
        $minPrecio = $atributos['minPrecio'];
        $maxPrecio = $atributos['maxPrecio'];
        $orden = $atributos['orden'];

        $query->when($condicion, function (Builder $query, string $condicion) {
            $query->where('condicion_id', $condicion);
        })
            ->when($marca, function (Builder $query, string $marca) {
                $query->where('marca_id', $marca);
            })
            ->when($modelo, function (Builder $query, string $modelo) {
                $query->where('modelo_id', $modelo);
            })
            ->when($carroceria, function (Builder $query, string $carroceria) {
                $query->where('carroceria_id', $carroceria);
            })
            ->when($transmision, function (Builder $query, string $transmision) {
                $query->where('transmision_id', $transmision);
            })
            ->when($combustible, function (Builder $query, string $combustible) {
                $query->where('combustible_id', $combustible);
            })
            ->when($traccion, function (Builder $query, string $traccion) {
                $query->where('traccion_id', $traccion);
            })
            ->when($ubicacion, function (Builder $query, string $ubicacion) {
                $query->where('ubicacion_id', $ubicacion);
            })
            ->whereBetween('fecha_modelo', [$minYear, $maxYear])
            ->whereBetween('kilometraje', [$minKilometraje, $maxKilometraje])
            ->whereBetween('precio', [$minPrecio, $maxPrecio])
            ->when($orden, function (Builder $query, string $orden) {
                if ($orden === 'p_asc') {
                    $query->orderBy('precio', 'ASC');
                } elseif ($orden === 'p_desc') {
                    $query->orderBy('precio', 'DESC');
                } elseif ($orden === 'a_asc') {
                    $query->orderBy('fecha_modelo', 'ASC');
                } elseif ($orden === 'a_desc') {
                    $query->orderBy('fecha_modelo', 'DESC');
                }
            });
    }

    public static function imagePath($vehiculoId)
    {
        $imagesPath = public_path("storage/images/imagenes_vehiculos/{$vehiculoId}");
        return File::allFiles($imagesPath);
    }

    public static function saveImg($archivos, $path, $setPrincipal = false)
    {
        foreach ($archivos as $index => $archivo) {
            if ($setPrincipal && $index === 0) {
                $extension = $archivo->getClientOriginalExtension();
                $archivo->storeAs($path, 'principal.' . $extension);
            } else {
                $archivo->store($path);
            }
        }
    }
}
