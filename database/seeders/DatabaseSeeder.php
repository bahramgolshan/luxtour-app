<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Number;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 6; $i++) {
            $start_date = now()->addDays(fake()->randomDigit());
            $end_date = $start_date->addDays(fake()->randomDigit());
            DB::table('tours')->insert([
                'title' => fake()->city(),
                'description' => fake()->realText(),
                'content' => fake()->realText(),
                'duration' => fake()->randomDigit(),
                'duration_type' => 'hour',
                'start_date' => now()->addDays(fake()->randomDigit()),
                'end_date' => now()->addDays(fake()->randomDigit()),
                'child_price' => fake()->numberBetween($min = 150, $max = 900),
                'youth_price' => fake()->numberBetween($min = 150, $max = 900),
                'adult_price' => fake()->numberBetween($min = 150, $max = 900),
                'senior_price' => fake()->numberBetween($min = 150, $max = 900),
                'featured_image' => 'package-' . $i . '.jpg',
                'is_featured' => true,
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
    }
}
