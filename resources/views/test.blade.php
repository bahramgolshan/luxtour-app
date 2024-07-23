@extends('layouts/master')

@section('title', 'Payment Failed')

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
    <!-- About Start -->
    <section id="about">
        <div class="container-fluid py-5">
            <div class="container pt-5">
                <div class="row">
                    <div class="col">
                        <div class="pb-3">
                            <div class="bg-white mb-3" style="padding: 30px">
                                <div class="tour=detail pr-0 pr-xl-5">

                                    <!-- Tour Detail Start -->
                                    <!-- Tour Name-->
                                    <div class="border-bottom pb-3 mb-5">
                                        <div class="heading text-center">
                                            <h3 class="title fs-3 text-primary">Vancouver: 9in1</h3>
                                            <h4>Stanley Park, Grouse Mtn, Capilano Suspension Bridge, Hatchery, Capilano
                                                lake, Cleveland Dam</h4>
                                        </div>
                                        <p class="text-center">
                                            MARVEL LUXURY PRIVATE CAR TOUR
                                        </p>
                                    </div>
                                    <!-- /Tour Name-->

                                    <!-- Itinerary -->
                                    <div class="border-bottom pb-3 mb-5">
                                        <div class="heading">
                                            <h3 class="title fs-3 text-primary">Itinerary</h3>
                                            <p>Explore stunning destinations in style: </p>
                                        </div>
                                        <div class="timeline">
                                            <div class="accordion" id="accordionExample">

                                                <!-- Pickup-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-street-view"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>Pickup</h4>
                                                            </div>
                                                        </div>
                                                        <p><strong>Burrard Skytrain
                                                                Station (Hyatt Regency
                                                                Hotel)</strong></p>
                                                        <p>
                                                            There will be a lux car waiting by the taxi stand beside the
                                                            Burrard SkyTrain Station at the entrance of Melville St.
                                                        </p>

                                                        <a class="btn btn-sm btn-primary" style="color: #1E1C35"
                                                            href="https://maps.app.goo.gl/Dokg9kAKMK4JZrdC7" target="_blank"
                                                            rel="noopener noreferrer">Open in
                                                            map</a>
                                                    </div>
                                                </div>
                                                <!-- /Pickup-->

                                                <!-- Stanley Park 60 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-tree"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>1. Stanley Park <i class="fas fa-check-circle"></i></i>
                                                                </h4>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">60 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            is an expansive and diverse destination with a range of
                                                            attractions and natural features. During your tour, you will
                                                            experience some of the park's most iconic landmarks and scenic
                                                            spots. Here’s a comprehensive overview of what you’ll see
                                                        </p>
                                                        <ul class="border-top pt-3">
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse10"
                                                                    style="color: inherit;">
                                                                    <strong>Seawall ...<i
                                                                            class="fas fa-car-side"></i></strong>
                                                                </button>
                                                                <span class="badge">pass-by</span>
                                                                <div class="collapse" id="collapse10"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        The Stanley Park Seawall is a scenic, paved pathway
                                                                        that encircles the park. It offers stunning views of
                                                                        the waterfront, city skyline, and surrounding
                                                                        landscapes. The Seawall is ideal for walking,
                                                                        jogging, and cycling, providing a continuous,
                                                                        picturesque route around the park.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse11"
                                                                    style="color: inherit;">
                                                                    <strong>Lush Forests ...<i
                                                                            class="fas fa-car-side"></i></strong>
                                                                </button>
                                                                <span class="badge">pass-by</span>
                                                                <div class="collapse" id="collapse11"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        The park is home to ancient forests with towering
                                                                        Douglas firs, western red cedars, and Sitka spruces.
                                                                        These old-growth forests create a tranquil and
                                                                        majestic atmosphere as you drive through the park.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse12"
                                                                    style="color: inherit;">
                                                                    <strong>Horse-Drawn Carriage ...<i
                                                                            class="fas fa-car-side"></i></strong>
                                                                </button>
                                                                <span class="badge">pass-by</span>
                                                                <div class="collapse" id="collapse12"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Historical tours that provide a nostalgic and
                                                                        informative way to explore the park’s highlights
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /Stanley Park-->

                                                <!-- Totem Poles at Brockton Point 20 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-fish"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>2. Totem Poles at Brockton Point</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">20 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>Located at Brockton Point, the totem poles are among the most
                                                            visited attractions in Stanley Park. These intricately carved
                                                            poles represent various Indigenous cultures and provide rich
                                                            cultural insights.</p>
                                                    </div>
                                                </div>
                                                <!-- /Totem Poles at Brockton Point-->

                                                <!-- Backtone Point and Backtone Point Lighthouse 15 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-fish"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>3. Backtone Point and Backtone Point Lighthouse</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">15 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>Located at Brockton Point, the totem poles are among the most
                                                            visited attractions in Stanley Park. These intricately carved
                                                            poles represent various Indigenous cultures and provide rich
                                                            cultural insights.</p>
                                                    </div>
                                                </div>
                                                <!-- /Backtone Point and Backtone Point Lighthouse-->

                                                <!-- Prospect Point and Prospect Point Lookout 20 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-fish"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>4. Prospect Point and Prospect Point Lookout</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">20 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>A viewpoint offering breathtaking vistas of the Lions Gate
                                                            Bridge, Burrard Inlet, and the North Shore Mountains, and an
                                                            elevated spot providing panoramic views of the city, ocean, and
                                                            surrounding landscapes.</p>
                                                    </div>
                                                </div>
                                                <!-- /Prospect Point and Prospect Point Lookout-->

                                                <!-- Hollow Tree pass-by-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-chess-rook"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>
                                                                    <em>Hollow Tree ...<i class="fas fa-car-side"></i></em>
                                                                </h4>

                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">pass-by</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            A famous old-growth Douglas fir tree with a hollowed trunk that
                                                            has become a popular photo spot. It’s a great example of the
                                                            park’s historical and natural significance.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Hollow Tree-->

                                                <!-- Lost Lagoon pass-by-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-chess-rook"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>
                                                                    <em>Lost Lagoon ...<i class="fas fa-car-side"></i></em>
                                                                </h4>

                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">pass-by</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            A large, freshwater lagoon situated near the park’s entrance.
                                                            It’s a peaceful spot known for its scenic beauty and
                                                            birdwatching opportunities.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Lost Lagoon-->

                                                <!-- Lions Gate Bridge pass-by-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-chess-rook"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>
                                                                    <em>Lions gate Bridge ...<i
                                                                            class="fas fa-car-side"></i></em>
                                                                </h4>

                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">pass-by</span>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            The group drive the iconic Lions Gate suspension Bridge a
                                                            5,890-foot (1,823-meter), opened in 1938. connecting Vancouver
                                                            to the North Shore, as we cross, enjoy the views: the largest
                                                            Port of Canada on the left and Stanley Park's greenery and the
                                                            Majestic North Shore Mountains on the head. This bridge
                                                            symbolizes Vancouver's blend of urban and natural beauty.
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /Lions Gate Bridge-->

                                                <!-- Grouse Mountain 3 hours-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-tram"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>1. Grouse Mountain <i
                                                                        class="fas fa-check-circle"></i></i>
                                                                </h4>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">3 hours</span>
                                                            </div>
                                                        </div>
                                                        <ul class="border-top pt-3">
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse1"
                                                                    style="color: inherit;">
                                                                    <strong>SKYRIDE</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse1"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Take a scenic ride up the mountain for
                                                                        breathtaking
                                                                        views of Vancouver and the surrounding area.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse2"
                                                                    style="color: inherit;">
                                                                    <strong>PEAK CHAIRLIFT</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse2"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Ascend to 4,100 feet on our iconic Peak
                                                                        Chairlift, Here,
                                                                        behold a unique panoramic view, an awe-inspiring
                                                                        sight
                                                                        you won't find anywhere else.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse3"
                                                                    style="color: inherit;">
                                                                    <strong>HIKING TRAILS</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse3"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Enjoy various hiking trails suitable for
                                                                        different skill
                                                                        levels.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse4"
                                                                    style="color: inherit;">
                                                                    <strong>GRIZZLY BEAR REFUGE</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse4"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Visit the refuge to learn about grizzly bears
                                                                        and see
                                                                        TWO AMAZING HUGE GRIZZLY up close in a natural
                                                                        habitat.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse5"
                                                                    style="color: inherit;">
                                                                    <strong>WORLD-FAMOUS LUMGERJACK</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse5"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Experience the thrill of champion lumberjacks in
                                                                        action!
                                                                        Set in two 1900s logging camps, this high-energy
                                                                        show
                                                                        features log rolling, a daring 60-foot tree
                                                                        climb, axe
                                                                        throwing, and the exhilarating springboard chop
                                                                        - a
                                                                        unique event found only here in North America.
                                                                        Get ready
                                                                        for non-stop excitement that'll leave you on the
                                                                        edge of
                                                                        your seat!
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse6"
                                                                    style="color: inherit;">
                                                                    <strong>OWL TALKS SHOW</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse6"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        An opportunity to see birds of prey up close.
                                                                        Such as
                                                                        OWL, Eagle and other birds of prey.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse7"
                                                                    style="color: inherit;">
                                                                    <strong>THE EYE OF THE WIND & GROUSE MOUNTAIN
                                                                        PEAK</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse7"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        A unique wind turbine with a glass viewing pod
                                                                        offering
                                                                        panoramic views and enjoy the stunning vistas
                                                                        from the
                                                                        mountain's summit.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse8"
                                                                    style="color: inherit;">
                                                                    <strong>ZIPLINING</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse8"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Experience the thrill of ziplining through the
                                                                        mountain's forests.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse9"
                                                                    style="color: inherit;">
                                                                    <strong>ROPES ADVANTURE</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse9"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Experience the thrill! Conquer aerial ropes
                                                                        courses with
                                                                        balance, jumps, climbs, swings, and ziplines.
                                                                        Get ready
                                                                        for an adrenaline-packed journey through the
                                                                        treetops!
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /Grouse Mountain-->

                                                <!-- Capilano Sus Bridge 2 hours-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-torii-gate"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>2. Capilano Suspension Bridge</h4>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">2 hours</span>
                                                            </div>
                                                        </div>
                                                        <ul class="border-top pt-3">
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse10"
                                                                    style="color: inherit;">
                                                                    <strong>THE SUSPENSION BRIDGE</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse10"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Step onto the legendary 450-foot Capilano Suspension
                                                                        Bridge for an unforgettable adventure! Feel the
                                                                        thrill
                                                                        as you wobble across this historic landmark,
                                                                        suspended
                                                                        high above the stunning Capilano River. From lush
                                                                        gardens to the serene rainforest, immerse yourself
                                                                        in
                                                                        nature's beauty and join millions who have marveled
                                                                        at
                                                                        its swaying views over the past 130 years.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse11"
                                                                    style="color: inherit;">
                                                                    <strong>CLIFFWALK</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse11"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Experience the thrill of Cliffwalk, a
                                                                        gravity-defying
                                                                        walkway clinging to the granite cliff high above
                                                                        Capilano Canyon. Prepare for breathtaking views on
                                                                        the
                                                                        edge of nature like never before!
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse12"
                                                                    style="color: inherit;">
                                                                    <strong>TREETOPS ADVENTURER</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse12"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        Soar above the coastal rainforest on 7 suspension
                                                                        bridges and towering platforms for a thrilling
                                                                        adventure. Experience the forest from a squirrel's
                                                                        eye
                                                                        view like never before!
                                                                    </p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse13"
                                                                    style="color: inherit;">
                                                                    <strong>KIA’PALANO</strong>
                                                                </button>
                                                                <div class="collapse" id="collapse13"
                                                                    data-parent="#accordionExample">
                                                                    <p>
                                                                        At Kia'palano, delve into the rich heritage of the
                                                                        Indigenous people who have inhabited this land for
                                                                        millennia. Discover the profound connection between
                                                                        their culture and the natural world.
                                                                    </p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <!-- /Capilano Sus Bridge-->

                                                <!-- Hatchery 20 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-fish"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>3. Hatchery</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">20 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>Immerse yourself in nature's spectacle at the Hatchery!
                                                            Experience the vibrant colors of fall as you stroll amidst
                                                            towering trees and serene streams. Marvel at breathtaking views
                                                            of cascading waterfalls and majestic mountains, all while
                                                            witnessing the awe-inspiring journey of salmon returning to
                                                            spawn. Don't miss your chance to witness the beauty and wonder
                                                            of this natural paradise.</p>
                                                    </div>
                                                </div>
                                                <!-- /Hatchery-->

                                                <!-- Capilano lake 20 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-tint"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>4. Capilano lake</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">20 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>Nestled in the picturesque North Shore Mountains of British
                                                            Columbia, Capilano Lake offers visitors a perfect blend of
                                                            natural beauty, recreational activities, and fascinating
                                                            landmarks.</p>
                                                    </div>
                                                </div>
                                                <!-- /Capilano lake-->

                                                <!-- Cleveland Dam 20 mins-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-tint"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <button class="btn btn-link text-left" type="button"
                                                                    data-toggle="collapse" data-target="#collapse0">
                                                                    <h4>4. Cleveland Dam</h4>
                                                                </button>
                                                            </div>
                                                            <div class="col-sm-12 col-md-2 text-md-right mb-2">
                                                                <span class="badge">20 mins</span>
                                                            </div>
                                                        </div>
                                                        <p>View an impressive spillway nearing 300 feet, holding back the
                                                            670-acre man-made Capilano Lake, which provides the wonderful,
                                                            pure drinking water for much of the Greater Vancouver region.
                                                            Capilano-Pacific Trail runs 5 miles (8 km) north from Ambleside
                                                            Park to Capilano Lake.</p>
                                                    </div>
                                                </div>
                                                <!-- /Cleveland Dam-->

                                                <!-- return-->
                                                <div class="timeline-container primary">
                                                    <div class="timeline-icon">
                                                        <i class="fas fa-heart"></i>
                                                    </div>
                                                    <div class="timeline-body">
                                                        <div class="row">
                                                            <div class="col-sm-12 col-md-10">
                                                                <h4>Return</h4>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            We're gonna miss you! &#128557;
                                                        </p>
                                                    </div>
                                                </div>
                                                <!-- /return-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Itinerary -->

                                    <!-- Highlight-->
                                    <div class="border-bottom pb-3 mb-5">
                                        <div class="heading">
                                            <h3 class="title fs-3 text-primary">Highlights</h3>
                                        </div>
                                        <ul>
                                            <li>
                                                <strong>Private Tour in Luxury SUV:</strong> Enjoy a personalized adventure
                                                with a private tour and luxurious car ride.
                                            </li>
                                            <li>
                                                <strong>Wildlife Shows:</strong> Witness captivating shows featuring grizzly
                                                bears and endangered raptors native to the area.
                                            </li>
                                            <li>
                                                <strong>Stunning Scenic Views:</strong> Marvel at breathtaking views of the
                                                city, mountains, and ocean during your ascent.
                                            </li>
                                            <li>
                                                <strong>Thrilling Peak Chairlift:</strong> Experience the exhilarating Peak
                                                Chairlift with panoramic vistas and access to over 40 mountaintop
                                                attractions.
                                            </li>
                                            <li>
                                                <strong>Free Time for Activities:</strong> enjoy the lumberjack show, Rope
                                                Adventure, Zipline, play disc golf, and hike at your leisure.
                                            </li>
                                            <li>
                                                <strong>Hatchery:</strong> Observe the fascinating life cycle of salmon up
                                                close, from their early stages as eggs and fry to their development into
                                                mature fish, in the educational and interactive environment of the hatchery.
                                            </li>
                                            <li>
                                                Enjoy breathtaking views of <strong>Capilano Lake</strong> fresh water
                                                supplier
                                            </li>
                                            <li>
                                                The impressive <strong>Cleveland Dam</strong>, with its stunning backdrop of
                                                rugged mountains
                                                and lush forest, perfect for photography and nature appreciation
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Highlight-->

                                    <!-- Included -->
                                    <div class="border-bottom pb-2 mb-5">
                                        <div class="heading mb-3">
                                            <h3 class="title fs-3 text-primary">Included</h3>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <ul class="list-unstyled lh-xl p-3">
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Luxury car transit
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Private and small group tour
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Soft Drink
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        You'll receive a 10% discount on restaurant and coffee orders and a
                                                        20% discount at retail stores, courtesy of your tour guide
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Stanely Park</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Totem Park</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Light House</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Bracktone Point view</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Prospect Point Lookout</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Grouse Mountain</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Skyride Gondola</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Peak Chairlift</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to Grouse Mountain's <strong>Lumberjack
                                                            Show</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Raptor bird show</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Owl Talk</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>The Eye of The Wind</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Capilano Suspension
                                                            Bridge</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Treetops Adventure</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Cliffwalk</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission to <strong>Story Centre</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Kia'palano </strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>The Trading Post </strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Capilano Lake</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Cleveland Dam</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Hatchery Museum</strong>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-check-circle text-primary"></i>
                                                        Admission or entry ticket to <strong>Capilano Salmon
                                                            Hatchery</strong>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-md-6">
                                                <ul class="list-unstyled lh-xl p-3">
                                                    <li>
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                        Ticket for the Zip Line is $125 or Rope Adventure Ticket is $55
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                        Paraglider extra $249
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                        Restaurants
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-times-circle text-danger"></i>
                                                        Photograph and frame
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Included -->

                                    <!-- What to bring -->
                                    <div class="border-bottom pb-2 mb-5">
                                        <div class="heading mb-3">
                                            <h3 class="title fs-3 text-primary">What to bring</h3>
                                        </div>
                                        <ul class="lh-xl">
                                            <li>Comfortable shoes</li>
                                            <li>Warm clothing</li>
                                        </ul>
                                    </div>
                                    <!-- /What to bring -->

                                    <!-- Know before you go -->
                                    <div class="pb-2 mb-5">
                                        <div class="heading mb-3">
                                            <h3 class="title fs-3 text-primary">Know before you go</h3>
                                        </div>
                                        <ul class="lh-xl">
                                            <li>
                                                Mountain Zip line tours: $125 per person(Mountain Admission not included)
                                            </li>
                                            <li>
                                                Mountain Rope Adventure: $55 per person(Mountain Admission not included)
                                            </li>
                                            <li>
                                                Tandem Paragliding: $249 per person (Mountain Admission not included)
                                            </li>
                                            <li>
                                                Please be ready for the first pick-up at Burrard Sky train at 9:30 AM and
                                                the second at 10:45 AM
                                            </li>
                                            <li>
                                                Hotel pick-up is available from select Vancouver Downtown hotels, but you
                                                must schedule this at least 12 hours in advance (by 8:30 AM or 10 AM) with a
                                                little cost more. Luxury transportation will not go to hotels without a
                                                scheduled pick-up time and confirmation
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- /Know before you go -->
                                    <!-- Tour Detail End -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About End -->

@endsection

<!--https://codepen.io/Devcrud/pen/XWboGgL -->
