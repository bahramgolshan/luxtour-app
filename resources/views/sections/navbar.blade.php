<!-- Navbar Start -->
<section id="navbar">
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light shadow-lg py-3 py-lg-0 pl-3 pl-lg-5">
                {{-- <a href="{{ route('home') }}" class="navbar-brand">
                    <h1 class="m-0 text-primary">
                        <span class="text-dark">LUX</span>TOUR
                    </h1>
                </a> --}}
                <a href="{{ route('home') }}" class="navbar-brand">
                    <img class="navbar-brand-logo h-100" src="{{ asset('assets/images/logo.png') }}" alt="Logo"
                        data-hs-theme-appearance="default" style="width: 4rem;">
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>
                        <a href="{{ route('home') . '/#about' }}" class="nav-item nav-link">About</a>
                        <a href="{{ route('home') . '/#services' }}" class="nav-item nav-link">Services</a>
                        <a href="{{ route('home') . '/#tours' }}" class="nav-item nav-link">Packages</a>
                        <a href="/#testimonial" class="nav-item nav-link">Testimonial</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="/#blog-posts" class="dropdown-item">Blog Grid</a>
                                <a href="/#single" class="dropdown-item">Blog Detail</a>
                                <a href="/#destinations" class="dropdown-item">Destination</a>
                                <a href="/#guide" class="dropdown-item">Travel Guides</a>
                                <a href="/#testimonial" class="dropdown-item">Testimonial</a>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </nav>
        </div>
    </div>
</section>
<!-- Navbar End -->
