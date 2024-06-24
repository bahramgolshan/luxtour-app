<?php

use App\Models\Tour;
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
        Schema::create('tours', function (Blueprint $table) {
            $table->id();
            $table->string('city', 100);
            $table->string('title', 500);
            $table->string('description', 1000);
            $table->longText('content');
            $table->integer('duration');
            $table->enum('duration_type', Tour::$duration_types);
            $table->date('start_date');
            $table->date('end_date');
            $table->float('child')->comment('price');
            $table->float('youth')->comment('price');
            $table->float('adult')->comment('price');
            $table->float('senior')->comment('price');
            $table->string('featured_image');
            $table->boolean('is_featured')->default(false)->nullable();
            $table->float('rate')->nullable();
            $table->integer('number_of_votes')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tours');
    }
};
