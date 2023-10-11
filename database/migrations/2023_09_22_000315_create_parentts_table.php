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
        Schema::create('parentts', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_uno');
            $table->string('apellido_uno');
            $table->string('dpi_uno');
            $table->string('nombre_dos');
            $table->string('apellido_dos');
            $table->string('dpi_dos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parentts');
    }
};
