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
            $table->text('description');
            $table->json('images');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('date');
            $table->time('time');
            $table->string('location_map');
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
