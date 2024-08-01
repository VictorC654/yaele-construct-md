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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('etaj');
            $table->string('nr_camere');
            $table->string('suprafata');
            $table->string('boxa_depozitare');
            $table->text('desc_ro');
            $table->text('desc_ru');
            $table->string('price');
            $table->json('galerie');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
