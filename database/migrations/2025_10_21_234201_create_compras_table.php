<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('compras', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('evento_id')->nullable()->constrained('eventos','id_eventos')->onDelete('cascade');
    $table->foreignId('boleta_id')->nullable()->constrained('boletas','id_boletas')->onDelete('cascade');
    $table->integer('cantidad');
    $table->float('valor_total');
    $table->enum('metodo_pago', ['Tarjeta de credito', 'Tarjeta debito', 'PSE']);        
    $table->enum('estado', ['pendiente', 'exitosa', 'cancelada'])->default('pendiente'); 
    $table->timestamps();
});

    }

    public function down(): void {
        Schema::dropIfExists('compras');
    }
};
