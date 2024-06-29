<!-- Footer Start -->
<section id="footer">
    <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px">
        <div class="row justify-content-around pt-5">
            <div class="col-lg-3 col-md-6 mb-5">
                <a href="" class="navbar-brand">
                    <h1 class="text-primary">
                        <span class="text-white">LUX</span>TOUR
                    </h1>
                </a>
                <p>
                    Your gateway to unforgettable adventures. Let us share our passion
                    for travel with you. Welcome to a world of exploration and
                    excitement.
                </p>
                <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px">
                    Follow Us
                </h6>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-outline-primary btn-square mr-2" href="{{ $settings['facebook'] }}"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="{{ $settings['twitter'] }}"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-primary btn-square mr-2" href="{{ $settings['instagram'] }}"><i
                            class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-primary btn-square" href="{{ $settings['youtube'] }}"><i
                            class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
                    Links
                </h5>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-white-50 mb-2" href="{{ route('home') . '/#about' }}"><i
                            class="fa fa-angle-right mr-2"></i>About</a>
                    <a class="text-white-50 mb-2" href="{{ route('home') . '/#services' }}"><i
                            class="fa fa-angle-right mr-2"></i>Services</a>
                    <a class="text-white-50 mb-2" href="{{ route('home') . '/#packages' }}"><i
                            class="fa fa-angle-right mr-2"></i>Packages</a>
                    <a class="text-white-50 mb-2" href="{{ route('home') . '/#testimonial' }}"><i
                            class="fa fa-angle-right mr-2"></i>Testimonial</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px">
                    Contact Us
                </h5>
                <p>
                    <i class="fa fa-map-marker-alt mr-2"></i>{{ $settings['address'] }}
                </p>
                <p><i class="fa fa-phone-alt mr-2"></i>{{ $settings['phone'] }}</p>
                <p><i class="fa fa-envelope mr-2"></i>{{ $settings['email'] }}</p>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-white border-top py-4 px-sm-3 px-md-5"
        style="border-color: rgba(256, 256, 256, 0.1) !important">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white-50">
                    Copyright &copy; <a href="{{ route('home') }}">LuxTour</a>. All Rights Reserved.
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <p class="m-0 text-white-50">
                    Designed by <a href="https://htmlcodex.com">HTML Codex</a>
                </p>
            </div>
        </div>
    </div>
</section>
<!-- Footer End -->
