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

    .header {
        position: relative
    }

    .logo {
        width: 80px
    }

    .qr-code {
        margin: 10px;
    }
</style>

<body>
    <div class="header">
        <div class="logo display-inline-block">
            <a href="http://localhost:8000">
                <img src="{{ public_path() . '/assets/images/logo.png/' }}" alt="Logo" style="width:100%;">
            </a>
        </div>
        <div class="contacts float-right">
            <div class="email mr-10 display-inline-block">
                <strong>Email: </strong><a href="mailto:info@luxtour.com" target="_blank">{{ $settings['email'] }}</a>
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
        <p><strong>Booking Date:</strong>
            {{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</p>
        <p><strong>Reference:</strong> {{ $booking->reference ?? '' }}</p>
        <p><strong>Name:</strong> {{ $booking->first_name ?? '' }}
            {{ $booking->last_name ?? '' }}</p>
        <p><strong>Email:</strong> {{ $booking->email ?? '' }}</p>
        <p><strong>Phone Number:</strong> {{ $booking->mobile ?? '' }}</p>
        <p><strong>Number of Persons:</strong>
            @foreach ($booking->only(['child', 'youth', 'adult', 'senior']) as $key => $value)
                @if ($value > 0)
                    <span> {{ $value . ' ' . ucfirst($key) }},</span>
                @endif
            @endforeach
        </p>
        <p><strong>Total Amount:</strong>
            ${{ number_format($booking->amount_subtotal, 2, '.', '') }}</p>
        <p><strong>Tax Amount:</strong>
            ${{ number_format($booking->amount_tax, 2, '.', '') }}</p>
        <p><strong>Total Amount Paid:</strong>
            ${{ number_format($booking->amount_total, 2, '.', '') }}</p>
        <p><strong>Notes:</strong> Lorem ipsum dolor sit amet consectetur
            adipisicing elit.
            Rem, odio.</p>
    </div>

    <div class="text-center">
        <p><strong class="text-primary">Thank you for choosing {{ env('APP_NAME') }} :)</strong></p>
    </div>


</body>

</html>
