<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            $start_date = now()->addDays(fake()->randomDigit());
            $end_date = $start_date->addDays(fake()->randomDigit());
            DB::table('tours')->insert([
                'city' => fake()->city(),
                'title' => fake()->city(),
                'description' => fake()->realText(),
                'content' => fake()->realText(),
                'duration' => fake()->randomDigit(),
                'duration_type' => 'hour',
                'start_date' => now()->addDays(fake()->randomDigit()),
                'end_date' => now()->addDays(fake()->randomDigit()),
                'child' => fake()->numberBetween($min = 150, $max = 900),
                'youth' => fake()->numberBetween($min = 150, $max = 900),
                'adult' => fake()->numberBetween($min = 150, $max = 900),
                'senior' => fake()->numberBetween($min = 150, $max = 900),
                'featured_image' => 'package-' . $i . '.jpg',
                'is_featured' => true,
                'rate' => fake()->randomFloat(1, $min = 1, $max = 5),
                'number_of_votes' => fake()->numberBetween($min = 100, $max = 900),
            ]);
        }

        for ($i = 1; $i <= 4; $i++) {
            $start_date = now()->addDays(fake()->randomDigit());
            $end_date = $start_date->addDays(fake()->randomDigit());
            DB::table('testimonials')->insert([
                'name' => fake()->name(),
                'profession' => fake()->jobTitle(),
                'testimonial' => fake()->realText(),
                'image' => 'testimonial-' . $i . '.jpg',
                'is_featured' => true,
            ]);
        }

        for ($i = 1; $i <= 3; $i++) {
            $start_date = now()->addDays(fake()->randomDigit());
            $end_date = $start_date->addDays(fake()->randomDigit());
            DB::table('tour_shifts')->insert([
                'tour_id' => 1,
                'start_time' => fake()->time(),
                'end_time' => fake()->time(),
            ]);
        }
    }
}
