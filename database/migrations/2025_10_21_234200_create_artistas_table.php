<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('artistas', function (Blueprint $table) {
            $table->bigIncrements('id_artista');
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('genero_musical', 100);
            $table->string('ciudad_origen', 100);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('artistas');
    }
};
