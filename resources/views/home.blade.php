@extends('layouts/master')

@section('title', 'Luxury On Budget')

@section('content')

    @include('sections.carousel-main')
    {{-- @include('sections.booking-form') --}}
    @include('sections.tours')
    @include('sections.services')
    {{-- @include('sections.features') --}}
    @include('sections.about')
    {{-- @include('sections.destinations') --}}
    @include('sections.special-offer')
    {{-- @include('sections.team') --}}
    @include('sections.testimonial')
    {{-- @include('sections.blog-posts') --}}

@endsection
