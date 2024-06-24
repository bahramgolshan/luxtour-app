<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class TourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd('formSubmit');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tour)
    {
        return view('tours.show', [
            'tour' => $tour,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tour $tour)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tour $tour)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tour)
    {
        //
    }

    // public function checkout(Request $request)
    // {
    //     $id = Route::current()->parameter('id');
    //     $tour = Tour::find($id);
    //     $ageTiers = Tour::$age_tiers;
    //     $quantities = Arr::where($request->only($ageTiers), function ($value, $key) {
    //         return $value > 0;
    //     });

    //     $orderData = $this->getInvoice($tour, $request->get('date'), $quantities);

    //     return view('sections.booking-checkout', [
    //         'tour' => $tour,
    //         'ageTiers' => $ageTiers,
    //         'orderData' => $orderData,
    //     ]);
    // }

    // private function getInvoice($tour, $date, $quantities)
    // {
    //     $data = [
    //         'date' => $date,
    //         'passengers' => [],
    //         'finalPrice' => 0,
    //     ];

    //     foreach ($quantities as $age => $quantity) {
    //         if ($quantity > 0) {
    //             $data['passengers'] += [
    //                 $age => $quantity,
    //             ];
    //             $data['finalPrice'] += $tour[$age] * $quantity;
    //         }
    //     }

    //     return $data;
    // }
}
