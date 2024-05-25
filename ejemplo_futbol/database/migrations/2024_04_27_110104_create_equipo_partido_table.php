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
        Schema::create('equipo_partido', function (Blueprint $table) {
            //PK
            $table->unsignedInteger('equipo_id');//crear campos
            $table->unsignedInteger('partido_id');
            $table->primary(['equipo_id','partido_id']);//establecerlos como PK compuesta

            //datos de la relación equipo-partido
            $table->tinyInteger('goles')->default(0);
            $table->boolean('es_local');

            //la PK compuesta también es FK
            $table->foreign('equipo_id')->references('id')->on('equipos');
            $table->foreign('partido_id')->references('id')->on('partidos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipo_partido');
    }
};
