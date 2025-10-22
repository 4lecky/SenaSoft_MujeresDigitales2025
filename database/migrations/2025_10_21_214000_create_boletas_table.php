<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('boletas', function (Blueprint $table) {
            $table->bigInteger('id_boletas')->primary();
            $table->float('precio');
            $table->integer('cantidad');
            $table->integer('valor_unitario');
            $table->integer('valor_total');
        });
    }

    public function down(): void {
        Schema::dropIfExists('boletas');
    }
};

