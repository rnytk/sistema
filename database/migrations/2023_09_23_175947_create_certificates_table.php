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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fecha_bautismo');
            $table->string('lugar_bautismo');
            $table->integer('no_libro');
            $table->integer('no_folio');
            $table->unsignedBigInteger('id_bautizado');
            $table->timestamps();

            $table->foreign('id_bautizado')
            ->references('id')
            ->on('baptizeds')
            ->onUpdate('cascade')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
