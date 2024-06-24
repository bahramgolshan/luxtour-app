<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use Stripe\Stripe;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PaymentController extends Controller
{
    public function index(Tour $tour, Request $request)
    {
        $ageTiers = Tour::$age_tiers;
        $quantities = Arr::where($request->only($ageTiers), function ($value, $key) {
            return $value > 0;
        });

        $bookingData = $this->getInvoice($tour, $request->get('date'), $quantities);

        return view('payment.checkout', [
            'tour' => $tour,
            'ageTiers' => $ageTiers,
            'bookingData' => $bookingData,
        ]);
    }

    public function checkout(Tour $tour, Request $request)
    {
        $lineItems = [];
        $totalPrice = 0;

        $ageTiers = Tour::$age_tiers;
        $quantities = Arr::where($request->only($ageTiers), function ($value, $key) {
            return $value > 0;
        });
        $bookingData = $this->getInvoice($tour, $request->get('date'), $quantities);

        foreach ($bookingData['passengers'] as $age => $quantity) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => 'cad',
                    'product_data' => [
                        'name' => __('tour.' . $age . '.title') . ' ' . __('tour.' . $age . '.ageRange'),
                    ],
                    'unit_amount' => $tour[$age] * 100,
                ],
                'quantity' => $quantity,
            ];
        }


        // Request Stripe Session
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'phone_number_collection' => ['enabled' => true],
            'success_url' => route('payment.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('payment.cancel', [], true),
        ]);

        // Create New Booking
        $booking = new Booking();
        $booking->status = 'unpaid';
        $booking->tour_id = $tour->id;
        $booking->total_price = $bookingData['totalPrice'];
        $booking->child = array_key_exists('child', $bookingData['passengers']) ? $bookingData['passengers']['child'] : null;
        $booking->youth = array_key_exists('youth', $bookingData['passengers']) ? $bookingData['passengers']['youth'] : null;
        $booking->adult = array_key_exists('adult', $bookingData['passengers']) ? $bookingData['passengers']['adult'] : null;
        $booking->senior = array_key_exists('senior', $bookingData['passengers']) ? $bookingData['passengers']['senior'] : null;
        $booking->date = $bookingData['date'];
        $booking->total_price = $bookingData['totalPrice'];
        $booking->reference = uniqid();
        $booking->session_id = $checkout_session->id;
        $booking->save();

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        try {
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException();
            }

            $booking = Booking::where('session_id', $session->id)->first();
            if (!$booking) {
                throw new NotFoundHttpException();
            }
            if ($booking->status === 'unpaid') {
                $booking->status = 'paid';
                $booking->name = $session->customer_details->name ?? null;
                $booking->email = $session->customer_details->email ?? null;
                $booking->phone = $session->customer_details->phone ?? null;
                $booking->save();
            }

            return view('payment.success', compact('booking'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }

    public function cancel()
    {
        return view('payment.cancel');
    }

    private function getInvoice($tour, $date, $quantities)
    {
        $data = [
            'date' => $date,
            'passengers' => [],
            'totalPrice' => 0,
        ];

        foreach ($quantities as $age => $quantity) {
            if ($quantity > 0) {
                $data['passengers'] += [
                    $age => $quantity,
                ];
                $data['totalPrice'] += $tour[$age] * $quantity;
            }
        }

        return $data;
    }
}
