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
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id('MatForm');
            $table->string('NomForm');
            $table->string('PrenomForm');
            $table->string('EmailForm')->unique();
            $table->string('TelForm');
            $table->string('MdpForm');
            $table->string('PhotoForm')->nullable();
            $table->string('SpecForm');
            $table->string('StatutForm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formateurs');
    }
};
