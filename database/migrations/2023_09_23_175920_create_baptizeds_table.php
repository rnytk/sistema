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
        Schema::create('baptizeds', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->dateTime('fecha_nacimiento');
            $table->string('lugar');
            $table->string('municipio');
            $table->string('departamento');
            $table->unsignedBigInteger('id_padrino');
            $table->unsignedBigInteger('id_padre');
            $table->unsignedBigInteger('id_celebrante');
            $table->timestamps();


             $table->foreign('id_padrino')
            ->references('id')
            ->on('godparentts')
            ->onUpdate('cascade')
            ->onDelete('cascade');


             $table->foreign('id_padre')
            ->references('id')
            ->on('parentts')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
             $table->foreign('id_celebrante')
            ->references('id')
            ->on('celebrants')
            ->onUpdate('cascade')
            ->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('baptizeds');
    }
};
