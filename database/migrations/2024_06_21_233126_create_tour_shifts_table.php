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
        Schema::create('tour_shifts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tour_id')->nullable();
            $table->time('start_time');
            $table->time('end_time')->nullable();
            $table->timestamps();

            $table->foreign('tour_id')->references('id')->on('tours')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_shifts');
    }
};
