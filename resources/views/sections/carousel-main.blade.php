<!-- Carousel Start -->
<section id="hero">
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-cover" src="{{ asset('assets/images/hero/carousel-1.jpg') }}" alt="Image" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">
                            <h4 class="text-white text-uppercase mb-md-3">
                                Explore Vancouver with Style
                            </h4>
                            <h1 class="display-3 text-white mb-md-4">
                                Unforgettable Tours on a Budget
                            </h1>
                            <a href="{{ route('home') . '/#tours' }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Book
                                Now</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-cover" src="{{ asset('assets/images/hero/carousel-2.jpg') }}" alt="Image" />
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px">
                            <h4 class="text-white text-uppercase mb-md-3">
                                Discover Vancouver's Charms
                            </h4>
                            <h1 class="display-3 text-white mb-md-4">
                                Discover Vancouver's Charms
                            </h1>
                            <a href="{{ route('home') . '/#tours' }}" class="btn btn-primary py-md-3 px-md-5 mt-2">Book
                                Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
</section>
<!-- Carousel End -->
