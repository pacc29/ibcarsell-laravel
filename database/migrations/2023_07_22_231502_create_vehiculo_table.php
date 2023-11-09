<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehiculo', function (Blueprint $table) {
            $table->id();
            $table->string('placa')->unique();
            $table->string('descripcion')->nullable();
            $table->string('color')->nullable();
            $table->string('motor')->nullable();
            $table->integer('cilindros');
            $table->integer('cilindrada');
            $table->integer('puertas');
            $table->integer('precio');
            $table->integer('kilometraje');
            $table->year('fecha_fabricacion');
            $table->year('fecha_modelo');

            $table->unsignedBigInteger('marca_id');
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->unsignedBigInteger('modelo_id');
            $table->foreign('modelo_id')->references('id')->on('modelos');

            $table->unsignedBigInteger('carroceria_id');
            $table->foreign('carroceria_id')->references('id')->on('carroceria');

            $table->unsignedBigInteger('transmision_id');
            $table->foreign('transmision_id')->references('id')->on('transmision');
            
            $table->unsignedBigInteger('combustible_id');
            $table->foreign('combustible_id')->references('id')->on('combustible');

            $table->unsignedBigInteger('traccion_id');
            $table->foreign('traccion_id')->references('id')->on('traccion');

            $table->unsignedBigInteger('condicion_id');
            $table->foreign('condicion_id')->references('id')->on('condicion');

            $table->unsignedBigInteger('ubicacion_id');
            $table->foreign('ubicacion_id')->references('id')->on('ubicacion');



        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehiculo');
    }
};
