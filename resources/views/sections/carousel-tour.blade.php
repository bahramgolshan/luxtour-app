<!-- Carousel Start -->
<section id="hero">
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach ($images as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img class="img-cover" src="{{ asset('assets/images/' . $item->image) }}" alt="Image" />
                        <div class="carousel-captionn d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 900px">
                                <h4 class="text-white text-uppercase mb-md-3">
                                    {{ $item->title }}
                                </h4>
                                <h1 class="display-3 text-white mb-md-4">
                                    {{ $item->sub_title }}
                                </h1>
                                @isset($item->action_button_lable)
                                    <a href="{{ route('home') . '/' . $item->action_button_link }}"
                                        class="btn btn-primary py-md-3 px-md-5 mt-2">{{ $item->action_button_lable }}</a>
                                @endisset
                            </div>
                        </div>
                    </div>
                @endforeach
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
