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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('nif');
            $table->string('company_activity');
            $table->integer('smr_1')->default(0);
            $table->integer('smr_2')->default(0);
            $table->integer('dam_1')->default(0);
            $table->integer('dam_2')->default(0);
            $table->integer('daw_1')->default(0);
            $table->integer('daw_2')->default(0);
            $table->text('observations')->nullable();
            $table->string('modality');
            $table->foreignId('company_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
