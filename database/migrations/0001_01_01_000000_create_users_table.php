<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            // Campos personales
            $table->string('nombre', 100);
            $table->string('apellido', 100);
            $table->string('numero_documento', 50);
            $table->string('tipo_documento', 50);

            // Correo y teléfono
            $table->string('email', 150)->unique();
            $table->string('telefono', 20);

            // Rol por defecto
            $table->string('rol')->default('user');

            // Autenticación
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // Tokens y fechas
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};