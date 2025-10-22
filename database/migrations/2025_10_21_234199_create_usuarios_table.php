<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('tipo_documento', 20);
            $table->string('numero_documento', 20);
            $table->string('correo')->unique();
            $table->string('password');
            $table->string('telefono', 20)->nullable();
            $table->enum('role', ['Administrador', 'Usuario', 'Comprador'])->default('Usuario');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('usuarios');
    }
};


