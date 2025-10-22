<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('localidades', function (Blueprint $table) {
            $table->bigInteger('id_localidades')->primary();
            $table->enum('estados', ['VIP', 'General', 'Preferencial'])->nullable();
            $table->string('nombre', 100);
            $table->bigInteger('boletas_id')->nullable();

            $table->foreign('boletas_id')->references('id_boletas')->on('boletas');
        });
    }

    public function down(): void {
        Schema::dropIfExists('localidades');
    }
};
