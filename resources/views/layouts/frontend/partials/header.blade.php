 <!-- Spinner Start -->
 <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark px-5 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                @if ($company_info)
                  @foreach ($company_info->take(1) as $show)
                  <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>{{ $show->address }}</small>
                  <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>{{ $show->number }}</small>
                  <small class="text-light"><i class="fa fa-envelope-open me-2"></i>{{ $show->email }}</small>
                  @endforeach
                @endif
            </div>
        </div>
        <div class="col-lg-4 text-center text-lg-end">
            <div class="d-inline-flex align-items-center" style="height: 45px;">
                @if ($social_media)
                   @foreach ($social_media->take(1) as $show)
                   <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $show->twitter }}"><i class="fab fa-twitter fw-normal"></i></a>
                   <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $show->facebook }}"><i class="fab fa-facebook-f fw-normal"></i></a>
                   <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $show->linkdin }}"><i class="fab fa-linkedin-in fw-normal"></i></a>
                   <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href="{{ $show->instagram }}"><i class="fab fa-instagram fw-normal"></i></a>
                   <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href="{{ $show->youtube }}"><i class="fab fa-youtube fw-normal"></i></a>
                   @endforeach

                @endif

            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar & Carousel Start -->
<div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Startup</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="{{ route('index') }}" class="nav-item nav-link active">Home</a>
                {{-- <a href="{{ route('about') }}" class="nav-item nav-link">About</a> --}}
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                    <div class="dropdown-menu m-0">
                        <a href="{{ route('mission') }}" class="dropdown-item"> Mission</a>
                        <a href="{{ route('vission') }}" class="dropdown-item"> Vission</a>
                        <a href="{{ route('team_members') }}" class="dropdown-item"> Team Members</a>
                        <a href="{{ route('services') }}" class="dropdown-item"> services</a>
                        {{-- <a href="quote.html" class="dropdown-item"></a> --}}
                    </div>
                </div>
                <a href="{{ route('services') }}" class="nav-item nav-link">Services</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Blog</a>
                    <div class="dropdown-menu m-0">
                        <a href="blog.html" class="dropdown-item">Blog Grid</a>
                        <a href="detail.html" class="dropdown-item">Blog Detail</a>
                    </div>
                </div>
                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
            </div>
            <button type="button" class="btn text-primary ms-3" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
            <a href="https://htmlcodex.com/startup-company-website-template" class="btn btn-primary py-2 px-4 ms-3">Download Pro Version</a>
        </div>
    </nav>


