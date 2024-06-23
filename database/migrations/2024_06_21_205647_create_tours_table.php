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
            $table->string('title', 500);
            $table->string('description', 1000);
            $table->longText('content');
            $table->integer('duration');
            $table->enum('duration_type', Tour::$duration_types);
            $table->date('start_date');
            $table->date('end_date');
            $table->float('child_price');
            $table->float('youth_price');
            $table->float('adult_price');
            $table->float('senior_price');
            $table->string('featured_image');
            $table->boolean('is_featured')->default(false)->nullable();
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
