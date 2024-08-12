<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('usuarioslicencias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('usuario', 30);
            $table->string('clave', 10);
            $table->date('fecha_registro')->nullable();
            $table->string('levely', 50);
            $table->integer('Num_folios');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_licencias');
    }
};
