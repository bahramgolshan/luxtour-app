<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BookingController extends Controller
{
    public function download(Request $request)
    {
        $sessionId = $request->get('session_id');
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET_KEY'));
        try {
            // Retreive Session_id from stripe
            $session = \Stripe\Checkout\Session::retrieve($sessionId);
            if (!$session) {
                throw new NotFoundHttpException();
            }

            // Find booking
            $booking = Booking::where('session_id', $session->id)->first();
            if (!$booking) {
                throw new NotFoundHttpException();
            }

            // Generate QrCode
            $route = route('payment.success') . '?session_id=' . $session->id;
            $image = QrCode::format('png')
                ->size(200)
                ->color(33, 33, 33)
                // ->backgroundColor(245, 66, 75)
                // ->merge('https://www.seeklogo.net/wp-content/uploads/2016/09/facebook-icon-preview-1.png', .5, true)
                ->margin(1)
                ->generate($route);

            // Get Setting Information
            $settings = $settings = Setting::where('key', 'email')
                ->orWhere('key', 'phone')
                ->pluck('value', 'key');

            // Return Voucher
            return Pdf::loadView('pages.payment.voucher', compact('booking', 'image', 'settings'))
                // ->setPaper('a4', 'landscape')
                ->download('luxtour-voucher.pdf');
        } catch (\Exception $e) {
            throw new NotFoundHttpException();
        }
    }
}
