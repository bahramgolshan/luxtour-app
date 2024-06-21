@extends('layouts/master')

@section('title', 'blog-category List')

@section('content')

    @include('sections.carousel-main')
    @include('sections.booking-form')
    @include('sections.about')
    @include('sections.features')
    @include('sections.services')
    {{-- @include('sections.destinations') --}}
    @include('sections.packages')
    @include('sections.special-offer')
    {{-- @include('sections.team') --}}
    @include('sections.testimonial')
    {{-- @include('sections.blog-posts') --}}

@endsection
