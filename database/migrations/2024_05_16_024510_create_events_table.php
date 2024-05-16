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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organizer');
            $table->unsignedBigInteger('category_id');
            $table->string('province');
            $table->string('city');
            $table->string('description');
            $table->json('image');
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->dateTime('date');
            $table->string('time');
            $table->string('location');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
