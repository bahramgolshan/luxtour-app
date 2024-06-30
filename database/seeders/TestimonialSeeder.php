<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            // ['name', 'profession', 'testimonial', 'image', 'is_featured'],
            [
                'GetYourGuide traveler',
                'United States',
                'My LuxTour experience in Vancouver was truly remarkable, especially our visit to Grouse Mountain. The panoramic views from the peak were breathtaking. The journey in a luxurious BMW SUV added an extra layer of comfort and style, making every moment unforgettable.',
                'testimonial-1.jpg'
            ],
            [
                'GetYourGuide traveler',
                'Germany',
                "Our LuxTour of Vancouver included a visit to the Capilano Suspension Bridge, which was awe-inspiring. What stood out was not just the bridge's beauty but also the thoughtful touches. Our guide provided fascinating insights and surprised us with delicious snacks, enhancing our enjoyment of the natural wonders.",
                'testimonial-2.jpg'
            ],
            [
                'GetYourGuide traveler',
                'Netherland',
                "Booking our LuxTour was seamless from start to finish. The pickup was convenient, and our guide was both knowledgeable and supportive throughout the trip. The entire LuxTour staff ensured a comfortable and enjoyable experience, demonstrating professionalism and care.",
                'testimonial-3.jpg'
            ],
            [
                'GetYourGuide traveler',
                'United States',
                "LuxTour exceeded our expectations during our Vancouver visit. The service was impeccable—from the luxurious vehicles to the courteous behavior of the LuxTour staff. We felt pampered every step of the way, and the competitive pricing made it a fantastic value for the level of luxury and service provided.",
                'testimonial-4.jpg'
            ],
        ];

        foreach ($data as $item) {
            DB::table('testimonials')->insert([
                'name' => $item[0],
                'profession' => $item[1],
                'testimonial' => $item[2],
                'image' => $item[3],
                'is_featured' => true,
            ]);
        }
    }
}
