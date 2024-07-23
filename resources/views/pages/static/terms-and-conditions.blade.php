@extends('layouts/master')

@section('title', 'Payment Failed')

@section('content')
    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Terms and Conditions</h3>
                                @include('sections.terms-and-conditions')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

@endsection
