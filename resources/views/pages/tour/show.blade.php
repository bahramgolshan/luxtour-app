@extends('layouts/master')

@section('title', $tour->title)

@section('page-style')
    <style>
        .timeline {
            position: relative;
            padding-left: 2rem;
            margin: 0 0 0 30px;
            color: #1E1C35;
        }

        .timeline:before {
            content: '';
            position: absolute;
            left: -5px;
            top: 0;
            width: 4px;
            height: 100%;
            background: #1E1C35;
        }

        .timeline .timeline-container {
            position: relative;
            margin-bottom: 2.5rem;
        }

        .timeline .timeline-container .timeline-icon {
            position: absolute;
            left: -55px;
            top: 10px;
            width: 2.5rem;
            height: 2.5rem;
            border-radius: 50%;
            text-align: center;
            font-size: 1.5rem;
            background: #f6ce11;
        }

        .timeline .timeline-container .timeline-icon i {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        .timeline .timeline-container .timeline-icon img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .timeline .timeline-container .timeline-body {
            background: #f3f2ff;
            border-radius: 3px;
            padding: 20px 20px 15px;
            box-shadow: 1px 3px 9px rgba(0, 0, 0, .1);
        }

        .timeline .timeline-container .timeline-body:before {
            content: '';
            background: inherit;
            width: 20px;
            height: 20px;
            display: block;
            position: absolute;
            left: -10px;
            transform: rotate(45deg);
            border-radius: 0 0 0 2px;
        }

        .timeline .timeline-container .timeline-body .timeline-title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            /* margin-bottom: 1.4rem; */
        }

        .timeline .timeline-container .timeline-body .badge {
            background: #f6ce11;
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .timeline .timeline-container .timeline-body .timeline-subtitle {
            font-weight: 300;
            font-style: italic;
            opacity: 0.4;
            margin-top: 16px;
            font-size: 11px;
        }

        .timeline .timeline-container .timeline-body .btn:focus,
        .btn.focus {
            outline: 0;
            box-shadow: none;
        }

        .author {
            font-family: inherit;
            padding: 3em;
            text-align: center;
            width: 100%;
            color: white;
        }

        .author a:link,
        .author a:visited {
            color: white;
        }

        .author a:link:hover,
        .author a:visited:hover {
            text-decoration: none;
        }

        .author .btn:link,
        .author .btn:visited {
            margin-top: 1em;
            text-decoration: none;
            display: inline-block;
            font-family: inherit;
            font-weight: 100;
            color: white;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            background-color: black;
            padding: 1.5em 2rem;
            border-radius: 1em;
            transition: 0.5s all;
        }

        .author .btn:link:hover,
        .author .btn:visited:hover,
        .author .btn:link:focus,
        .author .btn:visited:focus,
        .author .btn:link:active,
        .author .btn:visited:active {
            background-color: #1a1a1a;
        }
    </style>
@endsection

@section('content')
    @include('sections.carousel-tour')
    @include('sections.booking-form')
    @include('sections.tour-detail')
@endsection
