<!-- Tour Start -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- Tour Attributes -->
                @if (count($tour->attributes) > 0)
                    <div class="pb-3">
                        <div class="bg-white mb-3" style="padding: 30px">
                            <div class="tour-attribute pr-0 pr-xl-5">
                                <div class="">
                                    <div class="row">
                                        @foreach ($tour->attributes as $attribute)
                                            <div class="col-12 col-lg-4 col-md-6">
                                                <div class="mb-2">
                                                    <i class="{{ $attribute->icon }} fs-5  text-primary"></i>
                                                    <span class="mr-2"> {{ $attribute->key }}:</span>
                                                    <strong>{{ $attribute->value }}</strong>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- /Tour Attributes -->

                <!-- Tour Detail Start -->
                <div class="pb-3">
                    <div class="bg-white mb-3" style="padding: 30px">
                        <div class="tour=detail pr-0 pr-xl-5">
                            {!! $tour->content !!}
                        </div>
                    </div>
                </div>
                <!-- Tour Detail End -->

            </div>
        </div>
    </div>
</div>
<!-- Tour End -->
