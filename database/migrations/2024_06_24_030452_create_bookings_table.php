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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('status');
            $table->unsignedBigInteger('tour_id');
            $table->date('date');
            $table->string('name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('phone', 100)->nullable();
            $table->integer('child')->nullable()->comment('quantity');
            $table->integer('youth')->nullable()->comment('quantity');
            $table->integer('adult')->nullable()->comment('quantity');
            $table->integer('senior')->nullable()->comment('quantity');
            $table->string('currency', 50)->nullable();
            $table->decimal('amount_subtotal', 12, 2)->nullable();
            $table->decimal('amount_total', 12, 2)->nullable();
            $table->decimal('amount_discount', 12, 2)->nullable();
            $table->decimal('amount_tax', 12, 2)->nullable();
            $table->string('reference')->nullable();
            $table->string('session_id');
            $table->timestamps();

            $table->foreign('tour_id')->references('id')->on('tours')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
