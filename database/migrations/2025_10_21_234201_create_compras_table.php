<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('compras', function (Blueprint $table) {
            $table->bigInteger('id_compras')->primary();
            $table->enum('metodo_pago', ['Tarjeta de credito', 'Tarjeta debito', 'PSE']);
            $table->bigInteger('usuarios_id')->nullable();
            $table->bigInteger('boletas_id')->nullable();
            $table->bigInteger('eventos_id')->nullable();

            $table->foreign('usuarios_id')->references('id_usuarios')->on('usuario');
            $table->foreign('boletas_id')->references('id_boletas')->on('boletas');
            $table->foreign('eventos_id')->references('id_eventos')->on('eventos');
        });
    }

    public function down(): void {
        Schema::dropIfExists('compras');
    }
};



