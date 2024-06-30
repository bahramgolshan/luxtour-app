@extends('layouts/master')

@section('title', 'Payment Failed')

@section('content')
    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col">
                        <div class="alert alert-danger text-center" role="alert">
                            <h4 class="alert-heading">
                                <i class="fas fa-times-circle"></i>
                                <span>Payment Failed</span>
                            </h4>
                            <p class="lead">We're sorry, but there was an issue processing your payment.</p>
                            <p>Please try again later or contact customer support for assistance.</p>
                            <a href="{{ route('home') }}" class="btn btn-danger mt-3">Back to Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

@endsection
