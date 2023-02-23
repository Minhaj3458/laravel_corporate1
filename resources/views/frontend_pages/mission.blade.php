@extends('layouts.frontend.app')

@section('content')

<div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Our Mission</h1>
            <a href="{{ route('index') }}" class="h5 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="{{ route('mission') }}" class="h5 text-white">Mission</a>
        </div>
    </div>
</div>
</div>
<!-- Navbar End -->


<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
<div class="modal-dialog modal-fullscreen">
    <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
        <div class="modal-header border-0">
            <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex align-items-center justify-content-center">
            <div class="input-group" style="max-width: 600px;">
                <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Full Screen Search End -->



<!-- Our Mission Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="row g-5">
        <div class="col-lg-7">
            <div class="section-title position-relative pb-3 mb-5">
                <h5 class="fw-bold text-primary text-uppercase">Our Mission</h5>
                <h1 class="mb-0">The Best IT Solution With 10 Years of Experience</h1>
            </div>
            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
        </div>
        <div class="col-lg-5" style="min-height: 500px;">
            <div class="position-relative h-100">
                <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('frontend/img/about.jpg')}}" style="object-fit: cover;">
            </div>
        </div>

    </div>
</div>
</div>
<!-- Our Mission End -->



<!-- Team Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5">
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
        <h5 class="fw-bold text-primary text-uppercase">Team Members</h5>
        <h1 class="mb-0">Professional Stuffs Ready to Help Your Business</h1>
    </div>
    <div class="row g-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-1.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.6s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-2.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.9s">
            <div class="team-item bg-light rounded overflow-hidden">
                <div class="team-img position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('frontend/img/team-3.jpg')}}" alt="">
                    <div class="team-social">
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-instagram fw-normal"></i></a>
                        <a class="btn btn-lg btn-primary btn-lg-square rounded" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    </div>
                </div>
                <div class="text-center py-4">
                    <h4 class="text-primary">Full Name</h4>
                    <p class="text-uppercase m-0">Designation</p>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Team End -->


<!-- Vendor Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
<div class="container py-5 mb-5">
    <div class="bg-white">
        <div class="owl-carousel vendor-carousel">
            <img src="{{ asset('frontend/img/vendor-1.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-2.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-3.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-4.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-5.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-6.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-7.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-8.jpg')}}" alt="">
            <img src="{{ asset('frontend/img/vendor-9.jpg')}}" alt="">
        </div>
    </div>
</div>
</div>
<!-- Vendor End -->

@endsection
