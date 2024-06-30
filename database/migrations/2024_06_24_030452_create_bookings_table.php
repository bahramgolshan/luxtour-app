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
            $table->unsignedBigInteger('tour_shift_id');
            $table->date('date');
            $table->string('first_name', 100)->nullable();
            $table->string('last_name', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('mobile', 100)->nullable();
            $table->string('mobile_2', 100)->nullable();
            $table->string('country', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('address', 100)->nullable();
            $table->boolean('conditions_accepted')->nullable();
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
            $table->foreign('tour_shift_id')->references('id')->on('tour_shifts')->onUpdate('cascade')->onDelete('restrict');
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
