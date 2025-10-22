<?php


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('usuario', function (Blueprint $table) {
            $table->bigInteger('id_usuarios')->primary();
            $table->string('nombre', 20);
            $table->string('apellido', 20);
            $table->string('correo', 100);
            $table->integer('num_telefono');
            $table->string('contraseña', 50);
            $table->enum('Role', ['Administrador', 'Usuario', 'Comprador'])->default('Usuario');
            $table->bigInteger('boletas_id')->nullable();
            $table->bigInteger('eventos_id')->nullable();

            $table->foreign('boletas_id')->references('id_boletas')->on('boletas');
            $table->foreign('eventos_id')->references('id_eventos')->on('eventos');
        });
    }

    public function down(): void {
        Schema::dropIfExists('usuario');
    }
};


