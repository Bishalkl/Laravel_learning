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
        Schema::create('student', function (Blueprint $table) {
            $table->integer('id');
            $table->string('name', 30);
            $table->string('email')->unique()->nullable();
            $table->float('percentage', 3, 2)->comment('Student Precentage');
            $table->primary('id');
            $table->integer('city_id');
            $table->foreign('city_id')->references('id')->on('city');
            $table->integer('age')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
