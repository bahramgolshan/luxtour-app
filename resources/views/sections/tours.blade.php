<!-- Tours Start -->
<section id="tours">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
                    Packages
                </h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                @foreach ($tours as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-fluid" src="{{ asset('assets/images/tours/' . $item->featured_image) }}"
                                alt="image for {{ $item->title }}" />
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                        <span>{{ $item->title }}</span>
                                    </small>
                                    <small class="m-0">
                                        <i class="fa fa-hourglass text-primary mr-2"></i>
                                        <span>{{ $item->duration }}</span>3
                                        <span>{{ $item->duration_type }}</span>
                                    </small>
                                    {{-- <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small> --}}
                                </div>
                                <a class="h5 text-decoration-none"
                                    href="{{ route('tour.show', ['tour' => $item]) }}">{{ Str::limit($item->description, 50, '...') }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">
                                            <i class="fa fa-star text-primary mr-2"></i>4.5
                                            <small>(250)</small>
                                        </h6>
                                        <h5 class="m-0">${{ $item->adult_price }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Tours End -->
