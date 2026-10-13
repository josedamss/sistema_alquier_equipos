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
        Schema::create('detalle__alquilers', function (Blueprint $table) {
            $table->id('id_detalle');
            $table->unsignedBigInteger('id_alquiler');
            $table->unsignedBigInteger('id_equipo');
            $table->integer('cantidad');
            $table->decimal('precio_alquiler_dia', 10, 2);
            $table->foreign('id_alquiler')->references('id_alquiler')->on('alquileres')->onDelete('restrict');
            $table->foreign('id_equipo')->references('id_equipo')->on('equipos')->onDelete('restrict');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle__alquilers');
    }
};
