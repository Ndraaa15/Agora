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
        Schema::create('crud', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('organizer');
            $table->string('category_id');
            $table->string('province');
            $table->string('city');
            $table->text('description');
            $table->string('images');
            $table->date('start_date');
            $table->date('end_date');
            $table->date('date');
            $table->time('time');
            $table->string('location_map');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('crud');
    }
};
