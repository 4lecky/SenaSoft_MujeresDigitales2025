<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('evento_artista', function (Blueprint $table) {
    $table->id();
    $table->unsignedBigInteger('evento_id');
    $table->unsignedBigInteger('artista_id');
    $table->timestamps();

    $table->foreign('evento_id')->references('id_eventos')->on('eventos')->onDelete('cascade');
    $table->foreign('artista_id')->references('id_artista')->on('artistas')->onDelete('cascade');
});

    }

    public function down(): void {
        Schema::dropIfExists('evento_artista');
    }
};
