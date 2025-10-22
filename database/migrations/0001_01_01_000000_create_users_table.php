<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id autoincrementable
            $table->string('name', 50); // Nombres
            $table->string('apellido', 50); // Apellidos
            $table->string('tipo_documento', 20);
            $table->string('numero_documento', 20)->unique();
            $table->string('email')->unique();
            $table->string('telefono', 20)->nullable();
            $table->string('password');
            $table->enum('role', ['Administrador', 'Usuario', 'Comprador'])->default('Usuario');
            $table->timestamp('email_verified_at')->nullable(); // Para verificación de correo
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('users');
    }
};
