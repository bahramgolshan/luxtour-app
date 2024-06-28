@extends('layouts/master')

@section('title', $tour->title)

@section('content')
    @include('sections.carousel-tour')
    @include('sections.booking-form')
    @include('sections.tour-detail')
@endsection
