<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Models\TourShift;
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

        $bookingData = $this->getInvoice($tour, $request->get('date'), $request->get('shift_id'), $quantities);

        return view('pages.payment.checkout', [
            'tour' => $tour,
            'ageTiers' => $ageTiers,
            'bookingData' => $bookingData,
        ]);
    }

    public function checkout(Tour $tour, Request $request)
    {
        $request->validate([
            'date' => 'required|date|after_or_equal:today',
            'shift_id' => 'required|numeric',
            'child' => 'nullable|numeric',
            'youth' => 'nullable|numeric',
            'adult' => 'nullable|numeric',
            'senior' => 'nullable|numeric',
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'mobile' => 'required|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'address' => 'nullable|string',
            'acceptConditions' => 'required|accepted',
        ]);

        // 1. Get Booking Invoice
        $ageTiers = Tour::$age_tiers;
        $quantities = Arr::where($request->only($ageTiers), function ($value, $key) {
            return $value > 0;
        });
        $bookingInvoice = $this->getInvoice($tour, $request->get('date'), $request->get('shift_id'), $quantities);

        // 2. Based on bookingInvoice, Create Stripe's lineItems
        $lineItems = [];
        foreach ($bookingInvoice['passengers'] as $age => $quantity) {
            $unitAmount = isset($tour->discount) ? $tour[$age] - ($tour[$age] * $tour->discount / 100) : $tour[$age];
            $lineItems[] = [
                'price_data' => [
                    'currency' => config('app.currency.unit'),
                    'product_data' => [
                        'name' => __('tour.' . $age . '.title') . ' ' . __('tour.' . $age . '.ageRange'),
                    ],
                    'unit_amount' => $unitAmount * 100,
                ],
                'quantity' => $quantity,
            ];
        }

        // 3. Send lineItems to Stripe and request Session_id
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => $lineItems,
            'mode' => 'payment',
            'automatic_tax' => ['enabled' => true],
            'phone_number_collection' => ['enabled' => true],
            'success_url' => route('payment.success', [], true) . "?session_id={CHECKOUT_SESSION_ID}",
            'cancel_url' => route('payment.cancel', [], true),
        ]);

        // 4. Create New Booking with Strip's Session_id
        $booking = new Booking();
        $booking->status = 'unpaid';
        $booking->session_id = $checkout_session->id;
        $booking->reference = uniqid();
        $booking->tour_id = $tour->id;
        $booking->tour_shift_id = $bookingInvoice['shift']->id;
        $booking->date = $bookingInvoice['date'];
        $booking->first_name = $request->get('firstName');
        $booking->last_name = $request->get('lastName');
        $booking->email = $request->get('email');
        $booking->mobile = $request->get('mobile');
        $booking->mobile_2 = null;
        $booking->country = $request->get('country') ?? '';
        $booking->city = $request->get('city') ?? '';
        $booking->address = $request->get('address') ?? '';
        $booking->address_in_vancouver = $request->get('addressInVancouver') ?? '';
        $booking->conditions_accepted = $request->get('acceptConditions') == 'on' ? true : false;
        $booking->child = array_key_exists('child', $bookingInvoice['passengers']) ? $bookingInvoice['passengers']['child'] : null;
        $booking->youth = array_key_exists('youth', $bookingInvoice['passengers']) ? $bookingInvoice['passengers']['youth'] : null;
        $booking->adult = array_key_exists('adult', $bookingInvoice['passengers']) ? $bookingInvoice['passengers']['adult'] : null;
        $booking->senior = array_key_exists('senior', $bookingInvoice['passengers']) ? $bookingInvoice['passengers']['senior'] : null;
        $booking->amount_subtotal = $bookingInvoice['amountTotal']; // Price before discount: $500
        $booking->amount_discount = $bookingInvoice['amountDiscount']; // Amount of discount: $100
        $booking->amount_tax = null; //Amount of tax: $25
        $booking->amount_total = null; //Total Amount paid: $425
        $booking->currency = null;
        $booking->save();

        // 5. Redirect user to stripe's payment page including session_id
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
                $booking->status = $session->payment_status;
                $booking->mobile_2 = $session->customer_details->phone ?? null;
                $booking->amount_tax = $session->total_details->amount_tax / 100 ?? null;
                $booking->amount_total = $session->amount_total / 100 ?? null;
                $booking->currency = $session->currency ?? null;
                $booking->save();
            }

            return view('pages.payment.success', compact('booking'));
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }

    public function cancel()
    {
        return view('pages.payment.cancel');
    }

    private function getInvoice($tour, $date, $shiftId, $quantities)
    {
        $data = [
            'date' => $date,
            'shift' => TourShift::findOrFail($shiftId),
            'passengers' => [],
            'amountDiscount' => 0,
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

        $data['amountDiscount'] = $data['amountTotal'] * ($tour->discount / 100);

        return $data;
    }
}
