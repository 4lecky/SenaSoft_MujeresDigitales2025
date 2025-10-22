<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigInteger('id_eventos')->primary();
            $table->string('nombre', 20);
            $table->string('descripcion', 20);
            $table->time('horaFecha_inicio');
            $table->time('horaFecha_fin');
            $table->string('lugar_realizacion', 30)->nullable();
            $table->bigInteger('boletas_id')->nullable();
            $table->bigInteger('localides_id')->nullable();

            $table->foreign('boletas_id')->references('id_boletas')->on('boletas');
            $table->foreign('localides_id')->references('id_localidades')->on('localidades');
        });
    }

    public function down(): void {
        Schema::dropIfExists('eventos');
    }
};
