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

        $bookingData = $this->getInvoice($tour, $request->get('name'), $request->get('date'), $quantities);

        return view('pages.payment.checkout', [
            'tour' => $tour,
            'ageTiers' => $ageTiers,
            'bookingData' => $bookingData,
        ]);
    }

    public function checkout(Tour $tour, Request $request)
    {
        $lineItems = [];
        $amountTotal = 0;

        $ageTiers = Tour::$age_tiers;
        $quantities = Arr::where($request->only($ageTiers), function ($value, $key) {
            return $value > 0;
        });
        $bookingData = $this->getInvoice($tour, $request->name, $request->get('date'), $quantities);

        foreach ($bookingData['passengers'] as $age => $quantity) {
            $lineItems[] = [
                'price_data' => [
                    'currency' => config('app.currency.unit'),
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
            'automatic_tax' => ['enabled' => true],
            'phone_number_collection' => ['enabled' => true],
            'success_url' => route('payment.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('payment.cancel', [], true),
        ]);

        // Create New Booking
        $booking = new Booking();
        $booking->status = 'unpaid';
        $booking->tour_id = $tour->id;
        $booking->name = $bookingData['name'];
        $booking->amount_total = $bookingData['amountTotal'];
        $booking->child = array_key_exists('child', $bookingData['passengers']) ? $bookingData['passengers']['child'] : null;
        $booking->youth = array_key_exists('youth', $bookingData['passengers']) ? $bookingData['passengers']['youth'] : null;
        $booking->adult = array_key_exists('adult', $bookingData['passengers']) ? $bookingData['passengers']['adult'] : null;
        $booking->senior = array_key_exists('senior', $bookingData['passengers']) ? $bookingData['passengers']['senior'] : null;
        $booking->date = $bookingData['date'];
        $booking->amount_total = $bookingData['amountTotal'];
        $booking->reference = uniqid();
        $booking->session_id = $checkout_session->id;
        $booking->save();

        return redirect($checkout_session->url);
    }

    public function success(Request $request)
    {
        $sessionId = $request->get('session_id');
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));

        // try {
        $session = \Stripe\Checkout\Session::retrieve($sessionId);
        if (!$session) {
            throw new NotFoundHttpException();
        }
        $booking = Booking::where('session_id', $session->id)->first();
        if (!$booking) {
            throw new NotFoundHttpException();
        }
        // dd($session->amount_subtotal, $session->amount_total, $session->currency, $session->total_details->amount_discount, $session->total_details->amount_tax);
        if ($booking->status === 'unpaid') {
            $booking->status = $session->payment_status;
            // $booking->name = $session->customer_details->name ?? null;
            $booking->email = $session->customer_details->email ?? null;
            $booking->phone = $session->customer_details->phone ?? null;
            $booking->currency = $session->currency ?? null;
            $booking->amount_subtotal = $session->amount_subtotal / 100 ?? null;
            $booking->amount_total = $session->amount_total / 100 ?? null;
            $booking->amount_discount = $session->total_details->amount_discount / 100 ?? null;
            $booking->amount_tax = $session->total_details->amount_tax / 100 ?? null;
            $booking->save();
        }

        return view('pages.payment.success', compact('booking'));
        // } catch (\Exception $e) {
        //     throw new NotFoundHttpException();
        // }
    }

    public function cancel()
    {
        return view('pages.payment.cancel');
    }

    private function getInvoice($tour, $name, $date, $quantities)
    {
        $data = [
            'name' => $name,
            'date' => $date,
            'passengers' => [],
            'amountTotal' => 0,
        ];

        foreach ($quantities as $age => $quantity) {
            if ($quantity > 0) {
                $data['passengers'] += [
                    $age => $quantity,
                ];
                $data['amountTotal'] += $tour[$age] * $quantity;
            }
        }

        return $data;
    }
}
