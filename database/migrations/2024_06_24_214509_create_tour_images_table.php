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
        Schema::create('tour_images', function (Blueprint $table) {
            $table->id();
            $table->string('image', 100)->nullable();
            $table->string('title', 500)->nullable();
            $table->string('sub_title', 500)->nullable();
            $table->string('action_button_lable', 255)->nullable();
            $table->string('action_button_link', 100)->nullable();
            $table->unsignedBigInteger('tour_id')->nullable();

            $table->foreign('tour_id')->references('id')->on('tours')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_images');
    }
};
