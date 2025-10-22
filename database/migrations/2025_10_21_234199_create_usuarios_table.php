<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('usuarios', function (Blueprint $table) {
    $table->id('id_usuarios'); // esto crea BIGINT UNSIGNED
    $table->string('nombre', 20);
    $table->string('apellido', 20);
    $table->string('tipo_documento', 20);
    $table->string('numero_documento', 20);
    $table->string('correo', 100);
    $table->string('telefono', 20)->nullable();
    $table->string('password', 50);
    $table->enum('Role', ['Administrador', 'Usuario', 'Comprador'])->default('Usuario');
    $table->timestamps();
});
}
    public function down(): void {
        Schema::dropIfExists('usuarios');
    }
};

