<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->integer('telefono1');
            $table->integer('telefono2')->nullable();
            $table->string('email');
            $table->string('nif')->unique();
            $table->string('direccion');
            $table->string('localidad');
            $table->string('provincia');
            $table->string('cp');
            $table->string('nombre_gerente');
            $table->string('dni_gerente');
            $table->string('modalidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
