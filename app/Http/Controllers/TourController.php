<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
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

    public function checkout(Request $request)
    {
        $id = Route::current()->parameter('id');
        $tour = Tour::find($id);

        $orderData = [];
        $orderData['child'] = [
            'price' => $tour->child_price,
            'quantity' => $request->child,
            'total' => $tour->child_price * $request->child,
        ];
        $orderData['youth'] = [
            'price' => $tour->youth_price,
            'quantity' => $request->youth,
            'total' => $tour->youth_price * $request->youth,
        ];
        $orderData['adult'] = [
            'price' => $tour->adult_price,
            'quantity' => $request->adult,
            'total' => $tour->adult_price * $request->adult,
        ];
        $orderData['senior'] = [
            'price' => $tour->senior_price,
            'quantity' => $request->senior,
            'total' => $tour->senior_price * $request->senior,
        ];
        $orderData['finalPrice'] = $orderData['child']['total']
            + $orderData['youth']['total']
            + $orderData['adult']['total']
            + $orderData['senior']['total'];

        $orderData['date'] = $request->date;

        return view('sections.booking-checkout', [
            'tour' => $tour,
            'orderData' => $orderData,
        ]);
    }
}
