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
                        <div class="package-item bg-white mb-2 position-relative">
                            <a href={{ route('tour.show', ['tour' => $item]) }} class="text-dark">
                                <img class="package-item_img img-fluid"
                                    src="{{ asset('assets/images/tours/' . $item->featured_image) }}"
                                    alt="image for {{ $item->title }}" />
                                <div class="position-absolute d-flex flex-column" style="top: 15px; left:0">
                                    @isset($item->discount)
                                        <div class="badge bg-primary px-2">
                                            <span>Save </span>
                                            <span class="text-danger"
                                                style="font-size: 22px">{{ config('app.currency.symbol') . number_format($item->adult * ($item->discount / 100), 2, '.', '') }}</span>
                                        </div>
                                    @endisset
                                </div>
                                <div class="bg-primary" style="height: 12px;"></div>
                                <div class="p-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <small class="m-0">
                                            <i class="fa fa-map-signs text-primary mr-2"></i>
                                            <span>{{ Str::upper($item->tour_type) }}</span>
                                        </small>
                                        <small class="m-0">
                                            @for ($i = 0; $i < ceil($item->rate); $i++)
                                                <span class="fa fa-star text-primary"></span>
                                            @endfor
                                            {{-- <i class="fa fa-star text-primary mr-2"></i> --}}
                                            <span>{{ ceil($item->rate) }}</span>
                                            <small>({{ $item->number_of_votes }})</small>
                                        </small>
                                    </div>
                                    <h5>{{ $item->city }}: {{ $item->title }}</h5>
                                    <p>{{ $item->description }}</p>
                                    <div class="border-top mt-4 pt-4">
                                        <div class="price">
                                            @if (isset($item->discount))
                                                <div class="price-old">
                                                    <span class="font-weight-bold"><del>From
                                                            {{ config('app.currency.symbol') . number_format($item->adult, 2, '.', '') }}</del></span>
                                                </div>
                                                <div class="price-now">
                                                    <span class="font-weight-bold text-danger">From
                                                        {{ config('app.currency.symbol') . number_format($item->adult - $item->adult * ($item->discount / 100), 2, '.', '') }}</span>
                                                    <small>per person</small>
                                                </div>
                                            @else
                                                <div class="price-now">
                                                    <span class="font-weight-bold">From
                                                        {{ config('app.currency.symbol') . number_format($item->adult, 2, '.', '') }}</span>
                                                    <small>per person</small>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- Tours End -->
