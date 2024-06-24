@extends('layouts/master')

@section('title', 'blog-category List')

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
                                        {{-- <h5 class="card-title">Special title treatment</h5> --}}
                                        <p><strong>Tour Package:</strong> {{ $booking->tour->title }}</p>
                                        <p><strong>Booking Date:</strong>
                                            {{ \Carbon\Carbon::parse($booking->date)->format('M d, Y') }}</p>
                                        <p><strong>Reference:</strong> {{ $booking->reference ?? '' }}</p>
                                        <p><strong>Name:</strong> {{ $booking->name ?? '' }}</p>
                                        <p><strong>Email:</strong> {{ $booking->email ?? '' }}</p>
                                        <p><strong>Phone Number:</strong> {{ $booking->phone ?? '' }}</p>
                                        <p><strong>Number of Persons:</strong>
                                            @foreach ($booking->only(['child', 'youth', 'adult', 'senior']) as $key => $value)
                                                @if ($value > 0)
                                                    <span> {{ $value . ' ' . ucfirst($key) }},</span>
                                                @endif
                                            @endforeach
                                        </p>
                                        <p><strong>Total Amount:</strong>
                                            ${{ number_format($booking->total_price, 2, '.', '') }}</p>
                                        <p><strong>Notes:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                            Rem, odio.</p>
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
