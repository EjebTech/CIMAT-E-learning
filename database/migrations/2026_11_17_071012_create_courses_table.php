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
        Schema::create('courses', function (Blueprint $table) {
            $table->id('IdCourse');
            $table->string('TitleCourse');
            $table->string('DescCourse');
            $table->string('DurationCourse');
            $table->string('PictureCourse')->nullable();
            $table->string('PdfCourse');
            $table->string('VideoCourse');
            $table->integer('IdMod');
            $table->integer('MatTeacher');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
