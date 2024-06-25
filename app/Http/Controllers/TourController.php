<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\TourImage;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class TourController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Tour $tour)
    {
        $images = TourImage::where('tour_id', $tour->id)->get();

        return view('pages.tour.show', [
            'tour' => $tour,
            'images' => $images,
        ]);
    }

    public function edit(Tour $tour)
    {
        //
    }

    public function update(Request $request, Tour $tour)
    {
        //
    }

    public function destroy(Tour $tour)
    {
        //
    }
}
