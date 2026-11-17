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
        Schema::create('etudiants', function (Blueprint $table) {
            $table->id('MatEtud');
            $table->string('NomEtud');
            $table->string('PrenomEtud');
            $table->string('EmailEtud')->unique();
            $table->string('MdpEtud');
            $table->string('TelEtud')->nullable();
            $table->string('PhotoEtud')->nullable();
            $table->string('StatutEtud')->nullable();
            $table->integer('IdGRoupe')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
