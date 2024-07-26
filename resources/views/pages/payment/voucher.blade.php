<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Luxtour Voucher</title>
</head>

<style>
    body {
        margin: 0;
        font-family: "Poppins", sans-serif;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #656565;
        text-align: left;
        /* background-color: #f3f3f3; */
    }

    a {
        color: #e29b00;
        text-decoration: none
    }

    strong {
        color: #3D3A71
    }

    .display-inline-block {
        display: inline-block;
    }

    .float-right {
        float: right
    }

    .text-center {
        text-align: center;
    }

    .text-primary {
        color: #e29b00;
    }

    .m-10 {
        margin: 10px
    }


    .mr-10 {
        margin-right: 10px
    }

    .mt-10 {
        margin-top: 10px;
    }

    .header {
        position: relative
    }

    .logo {
        width: 80px
    }

    .qr-code {
        margin: 10px;
    }

    .important-info {
        background-color: #f9f9f9;
        padding: 10px;
        border-left: 5px solid #3D3A71;
        margin-bottom: 20px;
    }
</style>

<body>
    <div class="header">
        <div class="logo display-inline-block">
            <a href="http://localhost:8000">
                <img src="{{ public_path() . '/assets/images/logo.png/' }}" alt="Logo" style="width:100%;">
                {{-- <img src="{{ asset('/assets/images/logo.png/') }}" alt="Logo" style="width:100%;"> --}}
            </a>
        </div>
        <div class="contacts float-right">
            <div class="email mr-10 display-inline-block">
                <strong>Email: </strong><a href="mailto:info@luxtour.com"
                    target="_blank">{{ $settings['emailReservation'] }}</a>
            </div>
            <div class="phone mr-10 display-inline-block">
                <strong>Phone: </strong><a aria-label="Chat on WhatsApp" target="_blank"
                    href="https://wa.me/14373130022">{{ $settings['phone'] }}</a>
            </div>
        </div>
    </div>

    <hr>



    <div class="ticket-info">
        <div class="qr-code m-20 float-right">
            <img class="w-100" src="data:image/png;base64, {!! base64_encode($image) !!}" alt="booking voucher qrcode">
        </div>
        <p><strong>Tour Package:</strong> {{ $booking->tour->title }}</p>
        <p><strong>Pickup Date:</strong>
            {{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</p>
        <p><strong>Pickup Time:</strong>
            {{ \Carbon\Carbon::parse($booking->tourShift->start_time)->format('h:i A') }}</p>
        <p><strong>Booking Reference:</strong> {{ $booking->reference ?? '' }}</p>
        <p><strong>Name:</strong> {{ $booking->first_name ?? '' }}
            {{ $booking->last_name ?? '' }}</p>
        <p><strong>Email:</strong> {{ $booking->email ?? '' }}</p>
        <p><strong>Phone Number:</strong> {{ $booking->mobile ?? '' }}</p>
        <p><strong>Number of Passengers:</strong>
            @foreach ($booking->only(['child', 'youth', 'adult', 'senior']) as $key => $value)
                @if ($value > 0)
                    <span> {{ $value . ' ' . ucfirst($key) }},</span>
                @endif
            @endforeach
        </p>
        <p><strong>Subtotal:</strong>
            ${{ number_format($booking->amount_subtotal, 2, '.', '') }}</p>
        <p><strong>Discount:</strong>
            ${{ number_format($booking->amount_discount, 2, '.', '') }}</p>
        <p><strong>Tax:</strong>
            ${{ number_format($booking->amount_tax, 2, '.', '') }}</p>
        <p><strong>Total Paid:</strong>
            ${{ number_format($booking->amount_total, 2, '.', '') }}</p>
    </div>

    <div class="important-info mt-10">
        <p><strong>Important Information:</strong></p>
        <ul>
            <li>Please arrive at the pickup location at least 15 minutes before the scheduled pickup time.</li>
            <li>Bring a copy of this confirmation email with you.</li>
            <li>If you have any special requests or need assistance, feel free to email us at <a
                    href="mailto:{{ $settings['emailReservation'] }}">{{ $settings['emailReservation'] }}</a> or text
                us on WhatsApp at <a aria-label="Chat on WhatsApp" target="_blank"
                    href="https://wa.me/14373130022">{{ $settings['phone'] }}</a>.
            </li>
        </ul>
    </div>

    <div class="text-center">
        <p><strong class="text-primary">Thank you for choosing {{ env('APP_NAME') }} :)</strong></p>
    </div>


</body>

</html>
