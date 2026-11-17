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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id('MatTeacher');
            $table->string('FNameTeacher');
            $table->string('LNameTeacher');
            $table->string('EmailTeacher')->unique();
            $table->string('PhoneTeacher');
            $table->string('PasswordTeacher');
            $table->string('PhotoTeacher')->nullable();
            $table->string('SpecTeacher');
            $table->string('StatusTeacher')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
