<?php

namespace App\Mail;

use App\Models\Booking;
use App\Models\Setting;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class BookingEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public Booking $booking, public $route)
    {
        //
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(env('MAIL_FROM_NAME_RESERVATION', 'reservation@luxtour.ca'), 'Reservation | LuxTour'),
            subject: 'Booking Confirmation Email | LuxTour',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        // Get Setting Information
        $settings = $settings = Setting::where('key', 'emailReservation')
            ->orWhere('key', 'phone')
            ->pluck('value', 'key');

        return new Content(
            view: 'pages.email.voucher',
            with: [
                'booking' => $this->booking,
                'route' => $this->route,
                'settings' => $settings,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
