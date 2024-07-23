<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $tours = Tour::where('is_featured', true)->where('end_date', '>=', now())->orderBy('priority', 'ASC')->get();
        $testimonials = Testimonial::where('is_featured', true)->get();

        return view('home', [
            'tours' => $tours,
            'testimonials' => $testimonials,
        ]);
    }
}
