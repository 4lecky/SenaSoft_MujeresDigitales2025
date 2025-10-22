<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('artista', function (Blueprint $table) {
            $table->bigInteger('id_artista')->primary();
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('genero_musical', 100);
            $table->string('ciudad_origen', 100);
            $table->bigInteger('eventos_id')->nullable();

            $table->foreign('eventos_id')->references('id_eventos')->on('eventos');
        });
    }

    public function down(): void {
        Schema::dropIfExists('artista');
    }
};
