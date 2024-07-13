<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxTour Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
        }

        h1 {
            color: #3D3A71;
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            line-height: 1.6;
        }

        .details {
            margin-bottom: 20px;
        }

        .details p {
            margin: 5px 0;
        }

        .important-info {
            background-color: #f9f9f9;
            padding: 10px;
            border-left: 5px solid #3D3A71;
            margin-bottom: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            font-size: 16px;
            color: #fff;
            background-color: #3D3A71;
            text-decoration: none;
            border-radius: 5px;
        }

        .footer {
            font-size: 14px;
            color: #777;
            margin-top: 20px;
            border-top: 1px solid #ddd;
            padding-top: 10px;
        }

        .footer a {
            color: #3D3A71;
            text-decoration: none;
        }

        .footer img {
            max-width: 100px;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Tour Booking Confirmation</h1>

        <p>Dear {{ $booking->first_name ?? '' }},</p>

        <p>Thank you for booking with {{ env('APP_NAME') }}! We are delighted to confirm your reservation and look
            forward
            to providing you with an unforgettable experience.</p>

        <div class="details">
            <p><strong>Tour Package:</strong> {{ $booking->tour->title }}</p>
            <p><strong>Pickup Date:</strong> {{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</p>
            <p><strong>Pickup Time:</strong>
                {{ \Carbon\Carbon::parse($booking->tourShift->start_time)->format('h:i A') }}</p>
            <p><strong>Booking Reference:</strong> {{ $booking->reference ?? '' }}</p>
        </div>

        <div class="important-info">
            <p><strong>Important Information:</strong></p>
            <ul>
                <li>Please arrive at the pickup location at least 15 minutes before the scheduled pickup time.</li>
                <li>Bring a copy of this confirmation email with you.</li>
                <li>If you have any special requests or need assistance, don’t hesitate to contact us at <a
                        href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a> or
                    {{ $settings['phone'] }}.
                </li>
            </ul>
        </div>

        <p><strong>For more information or to see your booking, please visit:</strong></p>
        <a href="{{ $route }}" class="button">Check Your Booking</a>

        <p>We appreciate you choosing {{ env('APP_NAME') }} for your travel experience. If you have any questions or
            need
            to make changes to your booking, feel free to reach out to us.</p>

        <p>Safe travels and see you soon!</p>

        <div class="footer">
            <p>Best regards,</p>
            <img src="{{ asset('assets/images/logo.png') }}" alt="LuxTour Logo">
            <p>
                <strong>{{ env('APP_NAME') }}</strong><br>
                {{ $settings['phone'] }}<br>
                <a href="mailto:{{ $settings['email'] }}">{{ $settings['email'] }}</a><br>
                <a href="{{ env('APP_URL') }}">{{ env('APP_URL') }}</a>
            </p>
        </div>
    </div>
</body>

</html>
