<!-- Tours Start -->
<section id="tours">
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
                    Packages
                </h6>
                <h1>Pefrect Tour Packages</h1>
            </div>
            <div class="row">
                @foreach ($tours as $item)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <a class="h5 text-decoration-none" href="{{ route('tour.show', ['tour' => $item]) }}">
                                <img class="img-fluid" src="{{ asset('assets/images/tours/' . $item->featured_image) }}"
                                    alt="image for {{ $item->title }}" />
                            </a>
                            <div class="p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <small class="m-0">
                                        <i class="fa fa-map-marker-alt text-primary mr-2"></i>
                                        <span>{{ $item->city }}</span>
                                    </small>
                                    <small class="m-0">
                                        <i class="fa fa-hourglass text-primary mr-2"></i>
                                        <span>{{ $item->duration }}</span>
                                        <span>{{ $item->duration_type }}</span>
                                    </small>
                                    {{-- <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Person</small> --}}
                                </div>
                                <a class="h5 text-decoration-none"
                                    href="{{ route('tour.show', ['tour' => $item]) }}">{{ $item->title }}</a>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <h6 class="m-0">
                                            <i class="fa fa-star text-primary mr-2"></i>
                                            <span>{{ $item->rate }}</span>
                                            <small>({{ $item->number_of_votes }})</small>
                                        </h6>
                                        <h5 class="m-0">
                                            {{ config('app.currency.symbol') . number_format($item->adult, 2, '.', '') }}
                                        </h5>
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
