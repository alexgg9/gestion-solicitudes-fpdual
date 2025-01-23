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
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_empresa');
            $table->string('nif')->unique();
            $table->string('actividad_empresa');
            $table->integer('smr_1')->default(0);
            $table->integer('smr_2')->default(0);
            $table->integer('dam_1')->default(0); 
            $table->integer('dam_2')->default(0); 
            $table->integer('daw_1')->default(0); 
            $table->integer('daw_2')->default(0); 
            $table->text('observaciones')->nullable();
            $table->string('modalidad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitudes');
    }
};
