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
        Schema::table('tours', function (Blueprint $table) {
            $table->string('tour_type', 200)->nullable();
            $table->integer('discount')->nullable();
            $table->enum('discount_type', ['percentage', 'fixed_amount'])->nullable();
            $table->float('priority', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tours', function (Blueprint $table) {
            $table->dropColumn('tour_type');
            $table->dropColumn('discount');
            $table->dropColumn('discount_type');
        });
    }
};
