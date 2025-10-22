<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('boletas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');
            $table->string('localidad')->nullable();
            $table->float('precio');
            $table->integer('cantidad');
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('boletas');
    }
};
