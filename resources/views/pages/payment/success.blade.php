@extends('layouts/master')

@section('title', 'Payment Successful!')

@section('content')
    <section id="alert">
        <div class="container-fluid py-5">
            <div class="container">
                <!-- Alert Start -->
                <div class="row">
                    <div class="col-12">
                        <div class="alert alert-success text-center" role="alert">
                            <h4 class="alert-heading">
                                <i class="fas fa-check-circle"></i>
                                <span>Payment Successful!</span>
                            </h4>
                            <p>We have received your payment and your booking is confirmed.</p>
                        </div>
                    </div>
                </div>
                <!-- Alert End -->

                <!-- Booking Voucher Start -->
                <div class="row">
                    <div class="col">
                        <div class="pb-3">
                            <div class="bg-white mb-3" style="padding: 30px">
                                <div class="card">
                                    <div class="card-header card-success">
                                        <h4>Your Booking Detail</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-9">
                                                <div class="ticket-info">
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
                                            </div>
                                            <div class="col-lg-3 d-flex flex-column align-items-center">
                                                <div class="qr-code my-3" style="max-width: 15rem;">
                                                    <img class="w-100" src="data:image/png;base64, {!! base64_encode($image) !!}"
                                                        alt="booking voucher qrcode">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3 mt-lg-0 justify-content-md-center justify-content-lg-start">
                                            <div class="col-md-6 col-lg-4">
                                                <div class="donwload-pdf w-100">
                                                    <a class="btn btn-outline-primary w-100"
                                                        href="{{ route('booking.download', ['session_id' => $booking->session_id]) }}">DOWNLOAD
                                                        VOUCHER</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Booking Voucher End -->
            </div>
        </div>
    </section>
@endsection
