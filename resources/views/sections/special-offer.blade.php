<!-- Registration Start -->
<section id="specialOffer">
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px">
                            Mega Offer
                        </h6>
                        <h1 class="text-white">
                            <span class="text-primary">10% OFF</span> For Honeymoon
                        </h1>
                    </div>
                    <p class="text-white">
                        Embark on the ultimate adventure together and save big with our
                        exclusive honeymoon offer! Create unforgettable memories that will
                        last a lifetime while indulging in heart-pumping excitement as you
                        explore breathtaking landscapes and thrilling excursions tailored
                        just for two. Don't miss out on this incredible opportunity to
                        elevate your honeymoon to new heights of excitement and romance.
                    </p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>Thrilling
                            excursions
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>Breathtaking
                            landscapes
                        </li>
                        <li class="py-2">
                            <i class="fa fa-check text-primary mr-3"></i>Unforgettable
                            experiences
                        </li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control p-4" placeholder="Your name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control p-4" placeholder="Your email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select px-4" style="height: 47px">
                                        <option selected disabled>Select a destination</option>
                                        @foreach ($tours as $tour)
                                            <option value="{{ $tour->id }}">{{ $tour->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-primary btn-block py-3" type="submit">
                                        Sign Up Now
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Registration End -->
