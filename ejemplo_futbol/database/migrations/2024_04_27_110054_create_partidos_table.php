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
        Schema::create('partidos', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement();
            $table->dateTime('fecha');
            $table->boolean('jugado')->default(false);//los partidos se ingresan asumiendo que no se han jugado aun
            
            //FK estadios
            $table->unsignedInteger('estadio_id');
            $table->foreign('estadio_id')->references('id')->on('estadios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('partidos');
    }
};
